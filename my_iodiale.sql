-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 23, 2023 alle 18:11
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_iodiale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_carrello`
--

CREATE TABLE `commerce_carrello` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL COMMENT 'anno-mese-giorno',
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_categorie`
--

CREATE TABLE `commerce_categorie` (
  `id` int(11) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `commerce_categorie`
--

INSERT INTO `commerce_categorie` (`id`, `tipo`) VALUES
(1, 'Libri'),
(2, 'Musica');

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_comments`
--

CREATE TABLE `commerce_comments` (
  `id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `star` int(1) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `commerce_comments`
--

INSERT INTO `commerce_comments` (`id`, `text`, `star`, `idUser`, `idProd`) VALUES
(1, 'Fa scifo', 1, 2, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_contiene`
--

CREATE TABLE `commerce_contiene` (
  `idCart` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `quanto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_login`
--

CREATE TABLE `commerce_login` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` char(32) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `commerce_login`
--

INSERT INTO `commerce_login` (`id`, `user`, `pass`, `admin`) VALUES
(1, 'pippo', '0c88028bf3aa6a6a143ed846f2be1ea4', 1),
(2, 'pluto', 'c6009f08fc5fc6385f1ea1f5840e179f', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_ordini`
--

CREATE TABLE `commerce_ordini` (
  `id` int(11) NOT NULL,
  `dataOra` datetime NOT NULL COMMENT 'YYYY-MM-DD HH:MM:SS',
  `totale` float NOT NULL,
  `stato` varchar(32) NOT NULL,
  `coupon` varchar(32) NOT NULL,
  `idCart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `commerce_prodotti`
--

CREATE TABLE `commerce_prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descrizione` varchar(500) NOT NULL,
  `prezzo` float NOT NULL,
  `quanti` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `idCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `commerce_prodotti`
--

INSERT INTO `commerce_prodotti` (`id`, `nome`, `descrizione`, `prezzo`, `quanti`, `image`, `idCat`) VALUES
(1, 'Libro prova', 'vdhjfbjkgdragbkyiafdbgtsefv fdahgbfesfvgidfalhgfujrsfdyughkrbfyuds', 100.99, 1, 'images/libro1.png', 1),
(2, 'Canzone', 'Guitar', 30.29, 2, 'images/musica1.png', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commerce_carrello`
--
ALTER TABLE `commerce_carrello`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indici per le tabelle `commerce_categorie`
--
ALTER TABLE `commerce_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `commerce_comments`
--
ALTER TABLE `commerce_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProd` (`idProd`);

--
-- Indici per le tabelle `commerce_contiene`
--
ALTER TABLE `commerce_contiene`
  ADD PRIMARY KEY (`idCart`,`idProd`),
  ADD KEY `idCart` (`idCart`),
  ADD KEY `idProd` (`idProd`);

--
-- Indici per le tabelle `commerce_login`
--
ALTER TABLE `commerce_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indici per le tabelle `commerce_ordini`
--
ALTER TABLE `commerce_ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCart` (`idCart`);

--
-- Indici per le tabelle `commerce_prodotti`
--
ALTER TABLE `commerce_prodotti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCat` (`idCat`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `commerce_carrello`
--
ALTER TABLE `commerce_carrello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `commerce_categorie`
--
ALTER TABLE `commerce_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `commerce_comments`
--
ALTER TABLE `commerce_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `commerce_login`
--
ALTER TABLE `commerce_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `commerce_ordini`
--
ALTER TABLE `commerce_ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `commerce_prodotti`
--
ALTER TABLE `commerce_prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commerce_carrello`
--
ALTER TABLE `commerce_carrello`
  ADD CONSTRAINT `commerce_carrello_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `commerce_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `commerce_comments`
--
ALTER TABLE `commerce_comments`
  ADD CONSTRAINT `commerce_comments_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `commerce_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commerce_comments_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `commerce_prodotti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `commerce_contiene`
--
ALTER TABLE `commerce_contiene`
  ADD CONSTRAINT `commerce_contiene_ibfk_1` FOREIGN KEY (`idCart`) REFERENCES `commerce_carrello` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commerce_contiene_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `commerce_prodotti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `commerce_ordini`
--
ALTER TABLE `commerce_ordini`
  ADD CONSTRAINT `commerce_ordini_ibfk_1` FOREIGN KEY (`idCart`) REFERENCES `commerce_carrello` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `commerce_prodotti`
--
ALTER TABLE `commerce_prodotti`
  ADD CONSTRAINT `commerce_prodotti_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `commerce_categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
