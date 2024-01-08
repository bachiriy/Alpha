<?php

class Notification
{
    static function add($user_id, $message)
    {
        global $db;
        $query = 'insert into notifications (user_id, message) values (?,?)';
        $stm = $db->prepare($query);
        $stm->bind_param('is', $user_id, $message);
        try {
            $execution = $stm->execute();
            if (!$execution) {
                throw new Exception($stm->error);
            } else {
                return true;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    static function getAll(): array
    {
        global $db;
        $result = $db->query("
        select notifications.*, users.username
               from notifications
        join users on notifications.user_id = users.user_id;
        ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static function read()
    {
        global $db;
        return $db->query("update notifications set is_read = true where is_read = false");
    }

    static function notRead()
    {
        global $db;
        $result = $db->query("select count(*) as ntfs_not_read from notifications where is_read = false");
        return $result->fetch_assoc();
    }

    static function delete($id)
    {
        global $db;

        $query = "DELETE FROM notifications WHERE id = ?";
        $stm = $db->prepare($query);
        $stm->bind_param('i', $id);

        try {
            $execution = $stm->execute();
            if (!$execution) {
                throw new Exception("Error executing the statement: " . $stm->error);
            } else {
                return true;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}