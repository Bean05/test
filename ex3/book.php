<?
class Book{
    // определяем свойства, даем им публичный доступ
    public $title, $author, $year, $price;

    //используем слово $this как указание, что берем значения текущего объекта
    public function __construct($title, $author, $year, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;

    }
    // функция выводит полную нформацию о книге
    function getinfo(){
        return "Название: {$this->title}, Автор: {$this->author}, Год выпуска: {$this->year}, Цена: {$this->price}";
    }
}

// создаем экземпляр класса с его данными
$book = new Book('Мастер и Маргарита', 'Михаил Булгаков', 1967, 1200);
echo $book->getInfo();
$book2 = new Book("Отцы и дети", "Иван Тургенев", 1862, 500);
echo $book2->getInfo();
$book3 = new Book("Тихий Дон", "Михаил Шолохов", 1928, 800);
echo $book3->getInfo();
$book4 = new Book("Триумфальная арка", "Эрих Мария Ремарк", 1945, 700);
echo $book4->getInfo();