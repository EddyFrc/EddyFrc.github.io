<?php

class InventoryItem
{
    const array LEVEL_MAP = [
        1 => 'Débutant',
        2 => 'Habitué',
        3 => 'Confirmé',
        4 => 'Avancé',
        5 => 'Expert'
    ];
    const array RARITY_MAP = [
        1 => 'common',
        2 => 'uncommon',
        3 => 'rare',
        4 => 'epic',
        5 => 'legendary'
    ];
    const string DB_PATH = __DIR__ . '/../data/data.db';
    
    private string $id;
    private string $name;
    private string $imageName;
    private int $rarity;
    private string $desc;
    private string $skills;
    private string $longDesc;

    function getId(): string
    {
        return $this->id;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getImageName(): string
    {
        return $this->imageName;
    }

    function getRarity(): string
    {
        return $this->rarity;
    }

    function getDesc(): string
    {
        return $this->desc;
    }

    function getSkills(): string
    {
        return $this->skills;
    }

    function getLongDesc(): string
    {
        return $this->longDesc;
    }

    function setId(string $id): void
    {
        $this->id = $id;
    }

    function setName(string $name): void
    {
        $this->name = $name;
    }

    function setImageName(string $imageName): void
    {
        $this->imageName = $imageName;
    }

    function setRarity(int $rarity): void
    {
        $this->rarity = $rarity;
    }

    function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

    function setSkills(string $skills): void
    {
        $this->skills = $skills;
    }

    function setLongDesc(string $longDesc): void
    {
        $this->longDesc = $longDesc;
    }

    function __construct(
        string $id,
        string $name,
        string $imageName, 
        int $rarity,
        string $desc,
        string $skills,
        string $longDesc
    ) {
        $this->setId($id);
        $this->setName($name);
        $this->setImageName($imageName);
        $this->setRarity($rarity);
        $this->setDesc($desc);
        $this->setSkills($skills);
        $this->setLongDesc($longDesc);
    }

    static function readAll(): array {
        $query = (new PDO('sqlite:'.self::DB_PATH))->prepare('select * from inventory');
        $query->execute();
        $table = $query->fetchAll();

        $output = [];
        foreach ($table as $row) {
            $output[] = new InventoryItem(
                $row['id'],
                $row['name'],
                $row['imageName'],
                $row['rarity'],
                $row['desc'],
                $row['skills'],
                $row['longDesc']
            );
        }

        return $output;
    }
}
