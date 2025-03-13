<?php

class Animal
{
    public $animals;

    public function __construct($ar_animal)

    {
        $this->animals = $ar_animal;
    }

    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "- $animal <br/>";
        }
    }

    public function store($animal)
    {
        $this->animals[] = $animal;
    }
    public function update($index, $animal) {}
    public function destroy($index) {
        unset($this->animals[$index]);
    }
}
# membuat object
# kirimkan data array ke dalam contructor
$animal = new Animal(["ayam", "ikan"]);

echo "Index - Menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";

# method store
echo "Store - Menambahkan hewan baru <br/>";
$animal->store("Burung");
$animal->index();
echo "<br/>";

# method update
echo "update - Mengupdate hewan baru <br/>";
$animal->update(0, "kucing");
$animal->index();
echo "<br/>";

# method destroy
echo "destroy - Menghapus hewan baru <br/>";
$animal->destroy(1);
$animal->index();
echo "<br/>";

