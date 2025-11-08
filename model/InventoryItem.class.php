<?php

class InventoryItem {
    const LEVEL_MAP = [
        1 => 'Novice',
        2 => 'Intermédiaire',
        3 => 'Compétent',
        4 => 'Performant',
        5 => 'Expert'
    ];
    const RARITY_MAP = [
        1 => 'common',
        2 => 'uncommon',
        3 => 'rare',
        4 => 'epic',
        5 => 'legendary'
    ];
    const DB_PATH = __DIR__ . '/../data/data.db';

    public string $id;
    public string $name;
    public string $imageName;
    private int $rarity;
    public string $desc;
    public string $skills;
    public string $longDesc;

    public function getId(): string {
        return $this->id;
    }

    function __construct(
        string $id,
        string $name,
        string $imageName,
        int    $rarity,
        string $desc,
        string $skills,
        string $longDesc
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->imageName = $imageName;
        $this->rarity = $rarity;
        $this->desc = $desc;
        $this->skills = $skills;
        $this->longDesc = $longDesc;
    }

    /**
     * Renvoit l'identifiant nominal correspondant au numéro de rareté
     * @return string
     */
    function getRarityNominalClass(): string {
        return self::RARITY_MAP[$this->rarity];
    }

    /**
     * Renvoit le label (celui qui est affiché) correspondant au numéro de rareté
     * @return string
     */
    function getRarityLabel(): string {
        return self::LEVEL_MAP[$this->rarity];
    }

    /**
     * Lit toutes les entrées de la base de données et renvoie une liste d'objets `InventoryItem`
     * @return array<InventoryItem>
     */
    static function readAll(): array {
        $query = (new PDO('sqlite:' . self::DB_PATH))->prepare('SELECT * FROM inventory ORDER BY rarity DESC');
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
