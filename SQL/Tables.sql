-- Table maken in een database
CREATE TABLE `villas4u`.`contact_gegevens`(
    `Naam` TEXT NOT NULL,
    `Adres` TEXT NOT NULL,
    `Telefoonnummer` INT NOT NULL,
    `Email` TEXT NOT NULL,
    `Vraag` TEXT NOT NULL
) ENGINE = InnoDB;

-- Insterten in een database
INSERT INTO `contact_gegevens`(
    `Naam`,
    `Adres`,
    `Telefoonnummer`,
    `Email`,
    `Vraag`
)
VALUES(
    'Maddox de Rooij',
    'Claus plein 8 Nieuw-Beijerland',
    '0657785977',
    'maddox.sem.de.rooij@gmail.com',
    'Kan ik ook in persoon een villa kopen ipv bieden'
);

$SQL = "SELECT * FROM contact_gegevens"