-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 11:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadrzaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `imePrezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Korisnik'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `imePrezime`, `username`, `sifra`, `uloga`) VALUES
(1, 'Milica', 'mica', 'mica', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj`
--

CREATE TABLE `sadrzaj` (
  `sadrzajID` int(11) NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sadrzaj`
--

INSERT INTO `sadrzaj` (`sadrzajID`, `naslov`, `opis`, `slika`) VALUES
(15, 'Ruka ruku mije', '\"If you expect nothing from somebody you are never disappointed.\" \r\n— Sylvia Plath\r\n\r\nArtwork by Dovneon', '49775691_1997197520330164_7491131298820390912_n.jpg'),
(16, 'Japan - \"Lost in Translation\"', '\"The greatest happiness of life is the conviction that we are loved -- loved for ourselves, or rather, loved in spite of ourselves.\"  — Victor Hugo', '47579529_1960989617284288_7157857002180313088_n.jpg'),
(21, 'Šta?', '“I feel too much. That\'s what\'s going on.\' \'Do you think one can feel too much? Or just feel in the wrong ways?\' \'My insides don\'t match up with my outsides.\' \'Do anyone\'s insides and outsides match up?\' \'I don\'t know. I\'m only me.\'', '51316391_2031210500262199_5936663818422714368_n.jpg'),
(22, 'Devojčica i leptir', '“Accept yourself, love yourself, and keep moving forward. If you want to fly, you have to give up what weighs you down.”  ― Roy T. Bennett', '49239291_1990435337673049_5001230416779149312_n.jpg'),
(23, 'Swimmig against the tide', '\"How do you feel about yourself? Are you proud of your behavior? Are you ashamed of your behavior? You know in your heart if you have hurt someone — you know. If you have hurt someone, don\'t wait another day before making things right. ', '49281036_1981649458551637_5039874015657721856_n.jpg'),
(24, 'Zmaj iz boce', '“If we listened to our intellect we\'d never have a love affair. We\'d never have a friendship. We\'d never go in business because we\'d be cynical: \"It\'s gonna go wrong.\" Or \"She\'s going to hurt me.\" Or,\"I\'ve had a couple of bad love affairs, so therefore . . .\" Well, that\'s nonsense. You\'re going to miss life. You\'ve off the cliff all the time and build your wings on the way down. ‘And then I shall have wings and antennae,’ there will never be a butterfly. The caterpillar must accept its own in its transformation. \"I\'ve had a couple of bad love affairs, so therefore . . .\" Well, that\'s nonsense. You\'re going to miss life. You\'ve got to jump off the cliff all the time and build your wings on the way down.” \r\n― Ray Bradbury\r\n\r\nArtwork by @sarashakeel', '48416232_1972250356158214_8288614074653081600_n.jpg'),
(25, 'Plavi svet', 'The secret of genius is to carry the spirit of the child into old age, which means never losing your enthusiasm.”  ― Aldous Huxley  Artwork by Art of Tanya Shatseva', '48375112_1965177963532120_1513621654217949184_n.jpg'),
(26, 'Volim Sebe - Self Love', 'Self love, self respect, self worth. There is a reason they all start with “self”. You cannot find them in anyone else.', '17522774_1261283693921554_7969104779263880931_n.jpg'),
(28, 'Buđenje', '\"Awakening is not a thing. It is not a goal, not a concept. It is not something to be attained. It is a metamorphosis. If the caterpillar thinks about the butterfly it is to become, saying ‘And then I shall have wings and antennae,’ there will never be a butterfly. The caterpillar must accept its own disappearance in its transformation. When the marvelous butterfly takes wing, nothing of the caterpillar remains.\"  — Alejandro Jodorowsky', '47054526_1939939849389265_3888655203590733824_n.jpg'),
(30, 'Sladoled', '\"Reality is that which, when you stop believing in it, doesn\'t go away.\"  — Philip K. Dick  The caterpillar must accept its own disappearance in its transformation. When the marvelous butterfly takes wing, nothing of the caterpillar remains.\" — Alejandro Jodorowsky  Illustration by Jessica Flores', '46519681_1933081103408473_8566591328782123008_n.jpg'),
(32, 'Oči boje duge', '\"Please talk to me. Tell me about your day, your dreams, what you’re thinking, your aspirations, your wishes. It doesn’t matter how dark it is or how boring you think it is, I want to know you, the real you and love you for you“ \r\n- Angela\r\n\r\nDigital Painting by Nora Paskalev. Izvor: Berlin ArtParasites Facebook stranica.\r\n 22. jun. 2017. ', '19642318_1372159436167312_756026827912181678_n.jpg'),
(33, 'Kupanje u mleku', '\"The world is a projection of your mind. Good mind, good world. Bad mind, bad world. No mind, no world\" — Swami Parthasarathy Artwork by Sara Shakeel', '19424523_1358700920846497_542037830105596424_n.jpg'),
(34, 'Telo - vreteno', '\"I\'ll leave you alone forever now. I\'ll leave you like a comet leaves the outer space to meet the earth and never go back. But I will be thinking about you everyday, and I\'ll miss everything we never had. Everything that my brain created while you were somewhere else, thinking about the prettier things. Thinking about the happier, less blue things.\"\r\n- Daulina Ismaili\r\n', '17156144_1245005482216042_4038800254542149184_n.jpg'),
(35, 'Da, da...', '', '15401018_1163398900376701_2858597427565766788_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  ADD PRIMARY KEY (`sadrzajID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  MODIFY `sadrzajID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
