<?php
class UsersModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function cekUsername()
    {
        $username = $_POST['username'];
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function save($data)
    {
        $query = "INSERT INTO users (name,email,username,password) VALUES(:name,:email,:username,:password)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getByID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function update($data)
    {
        $query = "UPDATE users SET
			name=:name,
			username=:username,
			email=:email,
			password=:password
			WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function destroy($id)
    {
        $query = "DELETE FROM users WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function search()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM users WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
