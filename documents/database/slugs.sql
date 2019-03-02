UPDATE auteur
SET slug = LOWER(pseudo);

UPDATE post
SET slug = LOWER(REPLACE(titre, ' ', '-'));

UPDATE post
SET slug = REPLACE(slug, '.', '');

UPDATE post
SET slug = REPLACE(slug, ',', '');

UPDATE tag
SET slug = LOWER(nom);

UPDATE tag
SET slug = REPLACE(slug, '.', '');

UPDATE tag
SET slug = REPLACE(slug, ',', '');