<?php


class DataStorage
{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'bmw';
    private const DB_USER = 'root';
    private const DB_PASS = 'dtb456';

    private $db;

    public function __construct()
    {
//        $this->pole = array();
        $this->db = new PDO('mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_HOST, self::DB_USER, self::DB_PASS);
    }

    function loadAllData()
    {
        $items = [];
        $dbItems = $this->db->query('SELECT * FROM items');
        foreach ($dbItems as $item) {
            $items[] = new Item($item['id'], $item['title'], $item['text'], $item['cena'], $item['psc'], $item['purpose'], $item['email'], $item['phone']);
        }
        return $items;
    }

    function save(Item $item)
    {
        $sql = 'INSERT INTO items(id, title, text, cena, psc, purpose, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $this->db->prepare($sql)->execute([$item->getId(), $item->getTitle(), $item->getText(), $item->getCena(), $item->getPsc(), $item->getPurpose(), $item->getEmail(), $item->getPhone()]);
    }

    function delete(int $id)
    {

        $sql = "DELETE FROM items " . " WHERE id=" . $id;
//        $stmt = self::$db->prepare($sql);
        $this->db->prepare($sql)->execute([]);

        header("location: http://localhost/test/Inzercia/inzercia.php");
        die();
    }

    function update($id)
    {

        if (isset($_POST["edit"])) {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $cena = $_POST['cena'];
            $psc = $_POST['psc'];
            $purpose = $_POST['purpose'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if ($this->kontrola()) {
                $sql = "UPDATE items SET title='$title', text = '$text', cena = '$cena', psc = '$psc', purpose = '$purpose', email = '$email', phone = '$phone'  WHERE id=" . $id;
                $this->db->prepare($sql)->execute();
                echo "<script type='text/javascript'>window.location.href = 'inzercia.php';</script>";
            }


        }
    }

    public function kontrola()
    {
        $kontrola = true;

        if (((strlen($_POST['title'])) < 5) || ((strlen($_POST['title'])) > 50)) {
            $kontrola = false;
        }

        if ((strlen($_POST['text']) < 30)) {
            $kontrola = false;
        }

        if (((strlen($_POST['psc'])) <> 5) || (!(is_numeric($_POST['psc'])))) {
            $kontrola = false;
        }

        if (((strlen($_POST['cena'])) > 7) || (!(is_numeric($_POST['cena'])))) {
            $kontrola = false;
        }

        if (((strlen($_POST['phone'])) <> 10) || (!(is_numeric($_POST['phone'])))) {
            $kontrola = false;
        }

        return $kontrola;
    }


    public
    function processData()
    {
        if (isset($_POST["sent"])) {


            if ($this->kontrola()) {
                $this->save(new Item(null, $_POST["title"], $_POST["text"], $_POST['cena'], $_POST['psc'], $_POST['purpose'], $_POST['email'], $_POST['phone']));
                echo "<script type='text/javascript'>window.location.href = 'inzercia.php';</script>";
            }




//            header("location: http://localhost/test/Inzercia/inzercia.php");
//            die();

        }
    }


}