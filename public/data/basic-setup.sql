
/* Sectors */
INSERT INTO professions (title, info) VALUES ("Agriculture", "Agriculture, Forestry, Fishing and Hunting");
INSERT INTO professions (title, info) VALUES ("Mining", "Mining, Quarrying, and Oil and Gas Extraction");
INSERT INTO professions (title, info) VALUES ("Utilities", "Utilities");
INSERT INTO professions (title, info) VALUES ("Construction", "Construction");
INSERT INTO professions (title, info) VALUES ("Wholesale", "Wholesale Trade");
INSERT INTO professions (title, info) VALUES ("Retail", "Retail Trade");
INSERT INTO professions (title, info) VALUES ("Transportation", "Transportation and Warehousing");
INSERT INTO professions (title, info) VALUES ("Information", "Information");
INSERT INTO professions (title, info) VALUES ("Finance", "Finance and Insurance");
INSERT INTO professions (title, info) VALUES ("Real Estate", "Real Estate and Rental and Leasing");
INSERT INTO professions (title, info) VALUES ("Professional", "Professional, Scientific, and Technical Services");
INSERT INTO professions (title, info) VALUES ("Management", "Management of Companies and Enterprises");
INSERT INTO professions (title, info) VALUES ("Administrative", "Administrative and Support and Waste Management and Remediation Services");
INSERT INTO professions (title, info) VALUES ("Educational", "Educational Services");
INSERT INTO professions (title, info) VALUES ("Health Care", "Health Care and Social Assistance");
INSERT INTO professions (title, info) VALUES ("Entertainment", "Arts, Entertainment, and Recreation");
INSERT INTO professions (title, info) VALUES ("Accommodation", "Accommodation and Food Services");
INSERT INTO professions (title, info) VALUES ("Other Services", "Other Services (except Public Administration)");
INSERT INTO professions (title, info) VALUES ("Not classified", "Industries not classified");

/* Accommodations */
INSERT INTO `accommodations` (`id`, `title`, `adress`, `zipcode`, `city`, `latitude`, `longitude`, `created_at`, `updated_at`)
VALUES
	(1, 'Vallås / Hotell Laxemn', 'Strandvallen 7', '30247', 'Halmstad', 56.67448060000000000000, 12.90194690000000000000, NULL, NULL),
	(2, 'Pensionat Frösakull', 'Kronolundsvägen 1', '30239', 'Halmstad', 56.67137030000000000000, 12.73717420000000000000, NULL, NULL),
	(3, 'Knebildstorp', 'Knebildstorps gård', '30239', 'Halmstad', 56.66821300000000000000, 12.82308300000000000000, NULL, NULL);


/* Intrests */

INSERT INTO `intrests` (`id`, `category`, `created_at`, `updated_at`)
VALUES
	(1, 'Sport', NULL, NULL),
	(2, 'Food', NULL, NULL),
	(3, 'Cars', NULL, NULL),
	(4, 'Shopping', NULL, NULL),
	(5, 'Music', NULL, NULL),
	(6, 'Technology', NULL, NULL);
