<?php

class PwdRecover
{
    public $used;
    /**
     * @throws Exception
     */
    static function AddToken($user_id, $token)
    {
        self::deleteExpiredTokens();

        global $db;
        $query = 'insert into password_recovery (user_id, expires_at, token) values (?, adddate(now(), interval 1 hour), ?)';
        $stm = $db->prepare($query);
        $stm->bind_param('is', $user_id, $token);
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

    /**
     * @throws Exception
     */
    static function checkToken($token)
    {
        self::deleteExpiredTokens();

        global $db;
        $query = "select * from password_recovery where token = ? and now() < expires_at";
        $stm = $db->prepare($query);
        $stm->bind_param('s', $token);
        $exe = $stm->execute();
        $result = $stm->get_result();

        if (!$exe) {
            throw new Exception($stm->error);
        }
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    static function deleteExpiredTokens()
    {
        global $db;
        return $db->query("delete from password_recovery where expires_at < now()");
    }

    /**
     * @throws Exception
     */
    static function deleteToken($id): bool
    {
        global $db;
        $query = "delete from password_recovery where id = ?";
        $stm = $db->prepare($query);
        $stm->bind_param('i', $id);
        $exe = $stm->execute();
        if (!$exe) {
            throw new Exception($stm->error);
        }
        return $exe;
    }
}