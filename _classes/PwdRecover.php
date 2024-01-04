<?php

class PwdRecover
{
    /**
     * @throws Exception
     */
    static function AddToken($user_id, $token){
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
}