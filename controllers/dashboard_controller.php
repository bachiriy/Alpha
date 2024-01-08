<?php
if (!isset($_SESSION['user_id'])) {
    header('location: index.php?page=login');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['type']) && !empty($data['type']) && $data['type'] === 'add' && !empty($data['message']))
    {
        $ntf = Notification::add($_SESSION['user_id'], $data['message']);
        if ($ntf)
        {
            echo json_encode(['message' => 'ntf was not added']);
            exit();
        }
        exit();
    }

    if (isset($data['type']) && !empty($data['type']) && $data['type'] === 'get')
    {
        $ntfs = Notification::getAll();
        echo json_encode($ntfs);
        exit();
    }

    if (isset($data['type']) && !empty($data['type']) && $data['type'] === 'read')
    {
        $ntfs = Notification::read();
        echo json_encode($ntfs);
        exit();
    }

    if (isset($data['type']) && !empty($data['type']) && $data['type'] === 'notRead')
    {
        $ntfs = Notification::notRead();
        echo json_encode($ntfs);
        exit();
    }

    if (isset($data['type']) && !empty($data['type']) && $data['type'] === 'delete' && isset($data['ID']))
    {
        $ntfs = Notification::delete($data['ID']);
        exit();
    }
}
