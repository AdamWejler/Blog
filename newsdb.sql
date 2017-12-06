-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2017, 11:13
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `newsdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `text` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`) VALUES
(1, 'Pierwszy tekst na blogu', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar, neque ac consequat commodo, felis sapien eleifend ipsum, vitae bibendum ex odio ut diam. Fusce ac feugiat sapien. Nam facilisis dolor quis elit tincidunt, quis tincidunt massa lobortis. Nam posuere erat facilisis, hendrerit tortor ut, semper tortor. Integer posuere laoreet felis, ac sodales sem maximus in. In pharetra sem ut convallis consectetur. Suspendisse ut purus felis. Nulla mollis fringilla risus ac sagittis. Maecenas vel dapibus lectus. Suspendisse eget aliquet ipsum. Mauris sodales et odio in fringilla. Pellentesque eu egestas mauris. Vestibulum dignissim felis diam, vel accumsan dolor interdum ac. Aenean non dolor ex. Mauris eu justo ut ante cursus imperdiet. Proin dui urna, porttitor id aliquam eget, dignissim quis nunc.\r\n\r\nNam imperdiet sollicitudin pretium. Fusce tempor tortor leo, a rutrum neque dignissim in. Nulla varius arcu eget dapibus sodales. Vivamus placerat consectetur gravida. Sed auctor tellus lorem, ut porttitor turpis fermentum ac. Mauris suscipit bibendum augue sed posuere. Suspendisse vehicula dui eget consequat ultricies. Nulla porta euismod massa eget interdum.\r\n\r\nNam lobortis sollicitudin orci ut pellentesque. Donec vel hendrerit eros. Sed ullamcorper, lectus non vulputate gravida, nunc enim mollis sem, nec aliquet ante quam non ex. Phasellus ut arcu in odio tempor accumsan. Vestibulum tristique, mi at fringilla euismod, dui lacus interdum ipsum, quis pharetra nisl turpis eu quam. Donec ac eros sem. Nullam quis mauris non tortor maximus tempus mollis quis massa. Maecenas mollis felis dolor, in semper erat elementum a. Aliquam consequat vel massa at eleifend. Maecenas pharetra, arcu non tristique tristique, quam diam facilisis urna, at cursus tortor nulla sed turpis. Curabitur et diam ipsum. Mauris sit amet magna nisi. Nam quis suscipit augue. '),
(2, 'Drugi temat', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar, neque ac consequat commodo, felis sapien eleifend ipsum, vitae bibendum ex odio ut diam. Fusce ac feugiat sapien. Nam facilisis dolor quis elit tincidunt, quis tincidunt massa lobortis. Nam posuere erat facilisis, hendrerit tortor ut, semper tortor. Integer posuere laoreet felis, ac sodales sem maximus in. In pharetra sem ut convallis consectetur. Suspendisse ut purus felis. Nulla mollis fringilla risus ac sagittis. Maecenas vel dapibus lectus. Suspendisse eget aliquet ipsum. Mauris sodales et odio in fringilla. Pellentesque eu egestas mauris. Vestibulum dignissim felis diam, vel accumsan dolor interdum ac. Aenean non dolor ex. Mauris eu justo ut ante cursus imperdiet. Proin dui urna, porttitor id aliquam eget, dignissim quis nunc.\r\n\r\nNam imperdiet sollicitudin pretium. Fusce tempor tortor leo, a rutrum neque dignissim in. Nulla varius arcu eget dapibus sodales. Vivamus placerat consectetur gravida. Sed auctor tellus lorem, ut porttitor turpis fermentum ac. Mauris suscipit bibendum augue sed posuere. Suspendisse vehicula dui eget consequat ultricies. Nulla porta euismod massa eget interdum.\r\n\r\nNam lobortis sollicitudin orci ut pellentesque. Donec vel hendrerit eros. Sed ullamcorper, lectus non vulputate gravida, nunc enim mollis sem, nec aliquet ante quam non ex. Phasellus ut arcu in odio tempor accumsan. Vestibulum tristique, mi at fringilla euismod, dui lacus interdum ipsum, quis pharetra nisl turpis eu quam. Donec ac eros sem. Nullam quis mauris non tortor maximus tempus mollis quis massa. Maecenas mollis felis dolor, in semper erat elementum a. Aliquam consequat vel massa at eleifend. Maecenas pharetra, arcu non tristique tristique, quam diam facilisis urna, at cursus tortor nulla sed turpis. Curabitur et diam ipsum. Mauris sit amet magna nisi. Nam quis suscipit augue. '),
(3, 'Trzeci tekst', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar, neque ac consequat commodo, felis sapien eleifend ipsum, vitae bibendum ex odio ut diam. Fusce ac feugiat sapien. Nam facilisis dolor quis elit tincidunt, quis tincidunt massa lobortis. Nam posuere erat facilisis, hendrerit tortor ut, semper tortor. Integer posuere laoreet felis, ac sodales sem maximus in. In pharetra sem ut convallis consectetur. Suspendisse ut purus felis. Nulla mollis fringilla risus ac sagittis. Maecenas vel dapibus lectus. Suspendisse eget aliquet ipsum. Mauris sodales et odio in fringilla. Pellentesque eu egestas mauris. Vestibulum dignissim felis diam, vel accumsan dolor interdum ac. Aenean non dolor ex. Mauris eu justo ut ante cursus imperdiet. Proin dui urna, porttitor id aliquam eget, dignissim quis nunc.\r\n\r\nNam imperdiet sollicitudin pretium. Fusce tempor tortor leo, a rutrum neque dignissim in. Nulla varius arcu eget dapibus sodales. Vivamus placerat consectetur gravida. Sed auctor tellus lorem, ut porttitor turpis fermentum ac. Mauris suscipit bibendum augue sed posuere. Suspendisse vehicula dui eget consequat ultricies. Nulla porta euismod massa eget interdum.\r\n\r\nNam lobortis sollicitudin orci ut pellentesque. Donec vel hendrerit eros. Sed ullamcorper, lectus non vulputate gravida, nunc enim mollis sem, nec aliquet ante quam non ex. Phasellus ut arcu in odio tempor accumsan. Vestibulum tristique, mi at fringilla euismod, dui lacus interdum ipsum, quis pharetra nisl turpis eu quam. Donec ac eros sem. Nullam quis mauris non tortor maximus tempus mollis quis massa. Maecenas mollis felis dolor, in semper erat elementum a. Aliquam consequat vel massa at eleifend. Maecenas pharetra, arcu non tristique tristique, quam diam facilisis urna, at cursus tortor nulla sed turpis. Curabitur et diam ipsum. Mauris sit amet magna nisi. Nam quis suscipit augue. ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nick` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`iduser`, `nick`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
