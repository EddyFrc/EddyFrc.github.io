<?php

class InventoryItem {
    const LEVEL_MAP = [
        1 => 'Débutant',
        2 => 'Habitué',
        3 => 'Confirmé',
        4 => 'Avancé',
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

    public string $id {
        get {
            return $this->id;
        }
        set {
            $this->id = $value;
        }
    }
    public string $name {
        get {
            return $this->name;
        }
        set {
            $this->name = $value;
        }
    }
    public string $imageName {
        get {
            return $this->imageName;
        }
        set {
            $this->imageName = $value;
        }
    }
    private int $rarity {
        get {
            return $this->rarity;
        }
        set {
            $this->rarity = $value;
        }
    }
    public string $desc {
        get {
            return $this->desc;
        }
        set {
            $this->desc = $value;
        }
    }
    public string $skills {
        get {
            return $this->skills;
        }
        set {
            $this->skills = $value;
        }
    }
    public string $longDesc {
        get {
            return $this->longDesc;
        }
        set {
            $this->longDesc = $value;
        }
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
