<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241223112311 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant DROP nom, DROP prenom');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778EE455FCC0');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778EF46CD258');
        $this->addSql('DROP INDEX IDX_37D4778EE455FCC0 ON enseigne');
        $this->addSql('DROP INDEX IDX_37D4778EF46CD258 ON enseigne');
        $this->addSql('ALTER TABLE enseigne DROP matiere_id, DROP enseignant_id');
        $this->addSql('ALTER TABLE filiere DROP nom_filiere');
        $this->addSql('ALTER TABLE matiere DROP nom_matiere');
        $this->addSql('ALTER TABLE promos DROP FOREIGN KEY FK_31D1F705180AA129');
        $this->addSql('DROP INDEX IDX_31D1F705180AA129 ON promos');
        $this->addSql('ALTER TABLE promos DROP filiere_id, DROP nom_promos, DROP nbr_eleves');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E455FCC0');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955CAA392D2');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F46CD258');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955DC304035');
        $this->addSql('DROP INDEX IDX_42C84955E455FCC0 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955F46CD258 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955DC304035 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955CAA392D2 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP promos_id, DROP enseignant_id, DROP matiere_id, DROP salle_id, DROP jour, DROP heur_deb, DROP heur_fin');
        $this->addSql('ALTER TABLE salle DROP nom_salle, DROP capacite');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE enseigne ADD matiere_id INT NOT NULL, ADD enseignant_id INT NOT NULL');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778EE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778EF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('CREATE INDEX IDX_37D4778EE455FCC0 ON enseigne (enseignant_id)');
        $this->addSql('CREATE INDEX IDX_37D4778EF46CD258 ON enseigne (matiere_id)');
        $this->addSql('ALTER TABLE filiere ADD nom_filiere VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE matiere ADD nom_matiere VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE promos ADD filiere_id INT NOT NULL, ADD nom_promos VARCHAR(255) NOT NULL, ADD nbr_eleves INT NOT NULL');
        $this->addSql('ALTER TABLE promos ADD CONSTRAINT FK_31D1F705180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id)');
        $this->addSql('CREATE INDEX IDX_31D1F705180AA129 ON promos (filiere_id)');
        $this->addSql('ALTER TABLE reservation ADD promos_id INT NOT NULL, ADD enseignant_id INT DEFAULT NULL, ADD matiere_id INT NOT NULL, ADD salle_id INT NOT NULL, ADD jour DATE NOT NULL, ADD heur_deb TIME NOT NULL, ADD heur_fin TIME NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955CAA392D2 FOREIGN KEY (promos_id) REFERENCES promos (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('CREATE INDEX IDX_42C84955E455FCC0 ON reservation (enseignant_id)');
        $this->addSql('CREATE INDEX IDX_42C84955F46CD258 ON reservation (matiere_id)');
        $this->addSql('CREATE INDEX IDX_42C84955DC304035 ON reservation (salle_id)');
        $this->addSql('CREATE INDEX IDX_42C84955CAA392D2 ON reservation (promos_id)');
        $this->addSql('ALTER TABLE salle ADD nom_salle VARCHAR(255) NOT NULL, ADD capacite INT NOT NULL');
    }
}
