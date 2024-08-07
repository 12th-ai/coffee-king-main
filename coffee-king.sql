-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 12:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee-king`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(240) NOT NULL,
  `Last_Name` varchar(240) NOT NULL,
  `Gender` varchar(240) NOT NULL,
  `Email` varchar(240) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Img_Name` mediumtext NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Phone_Number` varchar(240) NOT NULL,
  `Password` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `First_Name`, `Last_Name`, `Gender`, `Email`, `Position`, `Img_Name`, `Username`, `Phone_Number`, `Password`) VALUES
(1, 'John', 'Doe', 'Male', 'jd@gmail.com', 'Manager', 'img_avatar-2.png', 'oxwxz', '0785324625', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `Img_Name` varchar(200) NOT NULL,
  `Small_Img` varchar(200) NOT NULL,
  `Journalist` int(200) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Summary` mediumtext NOT NULL,
  `Status` int(100) NOT NULL,
  `Date` varchar(240) NOT NULL,
  `Views` int(240) NOT NULL,
  `Comments` int(234) NOT NULL,
  `HeadText` mediumtext NOT NULL,
  `BodyText` mediumtext NOT NULL,
  `Sp_Word` mediumtext NOT NULL,
  `FooterText` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Img_Name`, `Small_Img`, `Journalist`, `Title`, `Summary`, `Status`, `Date`, `Views`, `Comments`, `HeadText`, `BodyText`, `Sp_Word`, `FooterText`) VALUES
(5, 'blog1-770x570.jpg', 'blog12-770x570.jpg', 4, 'History Of Black Coffee', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreetInteger maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet', 1, '26/03/2022', 54, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(7, 'blog2.jpg', 'blog3-770x570.jpg', 4, 'About Americano Coffee', ' Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh', 1, '26/03/2022', 130, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(8, 'blog3-770x570.jpg', 'blog7.jpg', 2, 'Guide To Coffee Roasting', 'In efficitur, leo non commodo lacinia, odio metus sodales purus, sed consequat lectus mi in purus. Vivamus vitae metus et nisl egestas sollicitudin. Quisque vel rutrum risus. Etiam eu sodales metus. Donec a lorem urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam commodo urna non leo pulvinar, eu inter', 1, '26/03/2022', 131, 2, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(9, 'blog8-770x570.jpg', 'blog5.jpg', 2, 'Capucino recipes that you like', 'Cras mattis cursus tristique. Quisque maximus magna massa. Nulla id rutrum mauris. Donec finibus sit amet odio auctor faucibus. Nam ligula enim, feugiat a accumsan eget, egestas nec neque. Fusce metus lacus, molestie non ipsum volutpat, lacinia placerat metus. Quisque elementum sem ut dignissim maximus. Aenean imperdiet nunc non odio scelerisque fau', 1, '26/03/2022', 136, 3, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(10, 'blog5.jpg', 'blog6.jpg', 4, 'Traditions of the Coffee ceremony', 'Suspendisse ut risus arcu. Vivamus gravida ligula odio, et posuere neque viverra at. Proin pellentesque vulputate mollis. Aenean pharetra, tortor in scelerisque ullamcorper, dolor est pulvinar tortor, eget suscipit elit ipsum sit amet magna. Aliquam sollicitudin mauris non ornare eleifend. Quisque venenatis pulvinar pretium. Mauris et auctor tellus', 1, '26/03/2022', 111, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(11, 'blog6.jpg', 'blog11-1024x719.jpg', 4, 'Coffee from around the World', 'Efficitur, leo non commodo lacinia, odio metus sodales purus, sed consequat lectus mi in purus. Vivamus vitae metus et nisl egestas sollicitudin. Quisque vel rutrum risus. Etiam eu sodales metus. Donec a lorem urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam commodo urna non leo pulvinar, eu interd', 1, '26/03/2022', 124, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(12, 'blog7.jpg', 'blog3-770x570.jpg', 4, 'How to store Coffee', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh', 1, '26/03/2022', 271, 1, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(13, 'blog11-1024x719.jpg', 'blog2.jpg', 2, 'How to store Americano Coffee', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet', 1, '26/03/2022', 136, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
(14, 'blog12-770x570.jpg', 'blog6.jpg', 4, 'Caffeine & Health', 'In efficitur, leo non commodo lacinia, odio metus sodales purus, sed consequat lectus mi in purus. Vivamus vitae metus et nisl egestas sollicitudin. Quisque vel rutrum risus. Etiam eu sodales metus. Donec a lorem urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam commodo urna non leo pulvinar, eu inter', 1, '26/03/2022', 138, 0, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
(16, 'martin-bekerman-2KxyxmXOjPs-unsplash.jpg', 'nakul-a-pL8cPKcV8-unsplash.jpg', 2, 'Whats Up In 2022', 'Cras mattis cursus tristique. Quisque maximus magna massa. Nulla id rutrum mauris. Donec finibus sit amet odio auctor faucibus. Nam ligula enim, feugiat a accumsan eget, egestas nec neque. Fusce metus lacus, molestie non ipsum volutpat, lacinia placerat metus. Quisque elementum sem ut dignissim maximus. Aenean imperdiet nunc non odio scelerisque fau ', 1, '30/03/2022', 223, 2, 'Pellentesque blandit arcu eu orci venenatis aliquet. Morbi in quam porta nibh hendrerit dapibus. Donec erat tortor, ullamcorper in dictum a, rhoncus quis risus. Phasellus luctus commodo aliquam. Pellentesque ac orci nec ligula efficitur blandit vel at sem. Sed commodo orci sapien, a finibus odio dignissim ac. Nunc ante purus, elementum ac tempor sed, facilisis sit amet ligula.', 'Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu. Cras vel elit felis. Vestibulum convallis ipsum id aliquam varius. Etiam nec laoreet turpis. Aenean nisi libero, tempor non sem vitae, hendrerit egestas ex. Nam magna odio, placerat ac risus tristique, viverra tincidunt nibh. Donec vitae leo efficitur, bibendum nibh ac, pretium urna. Vestibulum nunc augue, scelerisque ac vulputate sed, fermentum non nisi.', 'Vivamus tristique ligula quis orci malesuada tincidunt. Praesent magna purus, pharetra eu eleifend non, euismod vitae leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'Quisque sapien enim, feugiat et mi vel, fermentum placerat tortor. Praesent suscipit, purus tincidunt faucibus gravida, leo quam ullamcorper risus, quis pretium nibh eros ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut enim tempor, venenatis metus interdum, ullamcorper sem. Pellentesque et sem vehicula, condimentum velit malesuada, dapibus nunc. Duis vitae eleifend orci, ut varius risus. Praesent consequat nibh id dictum molestie. Cras eget sapien auctor, porttitor nisi vitae, vulputate justo. Cras et pharetra ligula, vel vestibulum ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Img_Name` varchar(2500) NOT NULL,
  `Date` mediumtext NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Comment` longtext NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Name`, `Img_Name`, `Date`, `Email`, `Comment`, `PostID`) VALUES
(5, 'Khloe Candy', 'barista2.jpg', 'Sunday, 03-04-2022 19:36', 'candyk@gmai.com', 'I Like Your Contents...', 12),
(8, 'Anonymous', 'barista4.jpg', 'Sunday, 03-04-2022 19:36', 'whhat@any.com', 'Idk, But So far, i think 2022, will be best year after this Covid-19 Pandemic', 16),
(9, 'AD', 'coffee_item1-1.jpg', 'Sunday, 03-04-2022 19:36', 'ad@re.c', 'Hey', 8),
(10, 'as', 'coffee_item2.jpg', 'Sunday, 03-04-2022 19:36', 'ad@re.c', '12kjadsf', 9),
(11, 'as', 'coffee_item2.jpg', 'Sunday, 03-04-2022 19:36', 'ad@re.c', '12kjadsf', 8),
(12, 'di', 'coffee_item4.jpg', 'Sunday, 03-04-2022 19:36', 'dra@g.m', 'fdgsfg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `errorimg`
--

CREATE TABLE `errorimg` (
  `ID` int(250) NOT NULL,
  `img_name` varchar(234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `errorimg`
--

INSERT INTO `errorimg` (`ID`, `img_name`) VALUES
(1, 'error-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `Img_Name` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Img_Name`) VALUES
(1, 'blog10.jpg'),
(4, 'blog2.jpg'),
(5, 'blog3-770x570.jpg'),
(6, 'blog1-770x570.jpg'),
(7, 'blog6.jpg'),
(8, 'blog7.jpg'),
(9, 'blog5.jpg'),
(10, 'blog12-770x570.jpg'),
(11, 'blog8-770x570.jpg'),
(12, 'blog9-770x570.jpg'),
(13, 'blog11-1024x719.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Product_Name` varchar(2000) NOT NULL,
  `Product_Price` double(250,2) NOT NULL,
  `Product_Discount` double(250,2) NOT NULL,
  `Brief` mediumtext NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Categories` varchar(2000) NOT NULL,
  `Tags` varchar(2000) NOT NULL,
  `Main_Preview` mediumtext NOT NULL,
  `Sub_Preview_1` mediumtext NOT NULL,
  `Sub_Preview_2` mediumtext NOT NULL,
  `Description` longtext NOT NULL,
  `Comments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Product_Name`, `Product_Price`, `Product_Discount`, `Brief`, `Quantity`, `Categories`, `Tags`, `Main_Preview`, `Sub_Preview_1`, `Sub_Preview_2`, `Description`, `Comments`) VALUES
(1, 'My Coffee Cup', 23.00, 19.00, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 0, '1', '5', 'coffee_item1.jpg', 'coffee_item1-1.jpg', 'coffee_item1-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 0),
(2, 'Ground Coffee', 13.44, 13.44, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 17, '2', '6', 'coffee_item9.jpg', 'coffee_item9-1.webp', 'coffee_item9-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 0),
(3, 'Green Africana', 9.00, 9.00, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 23, '2', '5', 'coffee_item2.jpg', 'coffee_item2-1.jpg', 'coffee_item2-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 0),
(4, 'Ethiopian Aroma', 19.99, 19.99, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 3, '1', '4', 'coffee_item3.jpg', 'coffee_item3-1.webp', 'coffee_item3-2.webp', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 0),
(5, 'Coffee Candy', 7.56, 7.56, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 16, '4', '7', 'coffee_item6-300x300.jpg', 'coffee_item6-1.jpg', 'coffee_item6-2.jpeg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 0),
(6, 'Coffee Bean', 27.66, 24.66, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 8, '2', '8', 'coffee_item8.jpg', 'coffee_item8-1.jpg', 'coffee_item8-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 1),
(7, 'Coffee Canephora', 23.05, 23.05, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 20, '4', '8', 'coffee_item5.jpg', 'coffee_item5-1.jpg', 'coffee_item5-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 3),
(8, 'American Black Coffee', 14.00, 14.00, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 14, '1', '5', 'coffee_item4.jpg', 'coffee_item4-1.jpg', 'coffee_item4-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 3),
(9, 'Coffee Cap', 4.66, 4.66, 'Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.', 18, '1', '10', 'coffee_item7-300x300.jpg', 'coffee_item7-1.jpg', 'coffee_item7-2.jpg', 'Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.\r\n\r\nMorbi sollicitudin arcu ut egestas varius. Nulla neque nisl, blandit a magna at, faucibus hendrerit magna. Ut imperdiet nibh nulla, a vehicula risus luctus vitae. Vestibulum vel ligula at elit scelerisque dictum. In vel pretium lectus, id dignissim nunc. Donec ac faucibus quam. Nullam in magna cursus, mattis ipsum vitae, consectetur tortor. Maecenas aliquam ultrices erat rutrum placerat. Mauris euismod faucibus lectus. Aenean elit nibh, efficitur in luctus et, fermentum in enim. Quisque consequat, ex ut faucibus mattis, dui ex interdum ex, sit amet rutrum odio lorem sed tortor.\r\n\r\nDuis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit. Praesent scelerisque ipsum vel egestas porttitor. Suspendisse tincidunt justo ante, in ullamcorper arcu tincidunt sed. Donec malesuada massa vel nisi vestibulum volutpat vel at nisi. Maecenas vehicula mattis diam. Praesent non iaculis lorem, ut eleifend eros. Mauris non malesuada enim. Maecenas volutpat lorem ut libero ullamcorper efficitur. Aliquam ut dictum dolor. Phasellus erat urna, accumsan ut est sit amet, ornare laoreet urna. Sed commodo augue dignissim interdum ultricies. Curabitur volutpat dapibus urna sed pharetra. Morbi lobortis erat justo, pellentesque ullamcorper urna porta eget.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pro_categories`
--

CREATE TABLE `pro_categories` (
  `ID` int(11) NOT NULL,
  `Category_Name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_categories`
--

INSERT INTO `pro_categories` (`ID`, `Category_Name`) VALUES
(1, 'Italian'),
(2, 'Coffee'),
(3, 'Roasted Coffee'),
(4, 'Green Coffee');

-- --------------------------------------------------------

--
-- Table structure for table `pro_comments`
--

CREATE TABLE `pro_comments` (
  `ID` int(11) NOT NULL,
  `User` varchar(250) NOT NULL,
  `Img_Name` varchar(2500) NOT NULL,
  `Date` mediumtext NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Comment` longtext NOT NULL,
  `ProdID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_comments`
--

INSERT INTO `pro_comments` (`ID`, `User`, `Img_Name`, `Date`, `Email`, `Comment`, `ProdID`) VALUES
(1, 'John Doe', 'barista4.jpg', 'Sunday 02-04-2022 12:36', 'admin@a.com', 'Hello Product', 8),
(2, 'John Doe', 'barista4.jpg', 'Sunday 03-04-2022 00:36', 'admin@a.com', 'Hello Product', 9),
(3, 'Rod Rich', 'wp5710971-minimal-desktop-4k-wallpapers.jpg', 'Sunday 03-04-2022 01:36', 'abc@g.com', 'Late At Night', 7),
(4, '123', 'coffee_item3-1.webp', 'Sunday 03-04-2022 02:36', '123@g.c', '123', 6),
(5, 'MGK', 'coffee_item4.jpg', 'Sunday 03-04-2022 03:36', 'gkk@g.com', 'Hat', 9),
(6, 'sd', 'coffee_item3-2.webp', 'Sunday 03-04-2022 04:36', 'sd@g.c', '123', 9),
(7, 'Blue', 'coffee_item5-2.jpg', 'Sunday 03-04-2022 05:36', 'blue12@gm.c', 'Jejejej', 8),
(8, 'Toper', 'wp5710971-minimal-desktop-4k-wallpapers.jpg', 'Sunday 03-04-2022 06:36', 'muneza@gmc.com', 'Risky\r\n', 8),
(9, 'Broke Guy', 'wp5710611-minimal-desktop-4k-wallpapers.jpg', 'Sunday 03-04-2022 07:36', 'broke@gmail.com', 'Greetings', 7),
(10, 'Richhy', 'wp5710971-minimal-desktop-4k-wallpapers.jpg', 'Sunday, 03-04-2022 19:44', 'rollandfelix05@outlook.com', 'Is This Available?', 7),
(11, 'Zuchu', 'mohammed-nasim-mYBW4f27CU8-unsplash.jpg', 'Monday, 04-04-2022 13:47', 'zuchutz@fo.com', 'Thanks', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pro_replies`
--

CREATE TABLE `pro_replies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Img_Name` varchar(2500) NOT NULL,
  `Date` mediumtext NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Reply` mediumtext NOT NULL,
  `ProdID` int(250) NOT NULL,
  `CommentID` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_replies`
--

INSERT INTO `pro_replies` (`ID`, `Name`, `Img_Name`, `Date`, `Email`, `Reply`, `ProdID`, `CommentID`) VALUES
(1, 'Jack', 'wp5710971-minimal-desktop-4k-wallpapers.jpg', 'Monday, 04-04-2022 12:58', 'jackh@gm.c', '456😂', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pro_tags`
--

CREATE TABLE `pro_tags` (
  `ID` int(11) NOT NULL,
  `Tag_Name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_tags`
--

INSERT INTO `pro_tags` (`ID`, `Tag_Name`) VALUES
(1, 'Coffee'),
(4, 'Aroma'),
(5, 'Arabica'),
(6, 'Bean'),
(7, 'Candy'),
(8, 'Latte'),
(10, 'Accessory');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Img_Name` varchar(2500) NOT NULL,
  `Date` mediumtext NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Reply` mediumtext NOT NULL,
  `PostID` int(250) NOT NULL,
  `CommentID` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`ID`, `Name`, `Img_Name`, `Date`, `Email`, `Reply`, `PostID`, `CommentID`) VALUES
(18, 'Marta', 'wp5710971-minimal-desktop-4k-wallpapers.jpg', 'Sunday, 03-04-2022 19:36', 'mmmar@gmail.com', 'Welcome Here', 12, 5),
(20, 'Shed', 'wp7558808-minimalist-mountain-black-and-white-wallpapers.png', 'Sunday, 03-04-2022 19:36', 'shed@hh.cc', 'Hey You!!!', 12, 5),
(24, 'ertre', 'coffee_item4.jpg', 'Sunday, 03-04-2022 19:36', 'ert@gm.c', 'ewrewr', 16, 8);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `ID` int(11) NOT NULL,
  `Names` varchar(240) NOT NULL,
  `Img_Name` mediumtext NOT NULL,
  `Position` varchar(250) NOT NULL,
  `Age` int(250) NOT NULL,
  `Experience` int(250) NOT NULL,
  `Phone_Number` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Facebook_Link` varchar(250) NOT NULL DEFAULT '#',
  `Twitter_Link` varchar(250) NOT NULL DEFAULT '#',
  `IG_Link` varchar(250) NOT NULL DEFAULT '#',
  `Linked_In_Link` varchar(250) NOT NULL DEFAULT '#',
  `About` mediumtext NOT NULL,
  `Coffee_Making_Experience` mediumtext NOT NULL,
  `Cafe_Waiter_Experience` mediumtext NOT NULL,
  `Cafe_Waiter_Skill` int(250) NOT NULL,
  `Coffee_Maker_Skill` int(250) NOT NULL,
  `Barista_Skill` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `Names`, `Img_Name`, `Position`, `Age`, `Experience`, `Phone_Number`, `Email`, `Facebook_Link`, `Twitter_Link`, `IG_Link`, `Linked_In_Link`, `About`, `Coffee_Making_Experience`, `Cafe_Waiter_Experience`, `Cafe_Waiter_Skill`, `Coffee_Maker_Skill`, `Barista_Skill`) VALUES
(1, 'John Richard', 'barista7.jpg', 'Barista', 34, 5, '0789364825', 'johnrichards@gmail.com', '#', 'https://www.freecodecamp.org/learn/responsive-web-design', '#', '#', ' Donec nec odio sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere enim eu tellus condimentum ullamcorper. Quisque dolor risus, blandit et sem eu, faucibus efficitur augue. Quisque at ornare ipsum. Curabitur viverra, nibh vitae bibendum semper, tortor ipsum euismod mauris, a facilisis ex enim non nibh. Cras cursus ligula nec lacus vehicula, ut molestie purus vestibulum.', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisque nulla ante, tristique in efficitur eu, ultrices a justo.', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisque nulla ante, tristique in efficitur eu, ultrices a justo.', 95, 90, 53),
(2, 'Kelley Miles', 'barista6.jpg', 'Blog Writer', 28, 9, '0785324625', 'mkelly@gmail.com', '#', '#', '#', '#', ' Donec nec odio sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere enim eu tellus condimentum ullamcorper. Quisque dolor risus, blandit et sem eu, faucibus efficitur augue. Quisque at ornare ipsum. Curabitur viverra, nibh vitae bibendum semp', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisq', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisq', 90, 57, 53),
(4, 'Sherman Warner', 'barista5.jpg', 'Blog Writer', 27, 4, '0743234567', 'shemwaner@gmail.com', '#', '#', '#', '#', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere enim eu tellus condimentum ullamcorper. Quisque dolor risus, blandit et sem eu, faucibus efficitur augue. Quisque at ornare ipsum. Curabitur viverra, nibh vitae bibendum semper, tortor ipsum euismod mauris, a facilisis ex enim non nibh', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisque nulla ante, tristique in efficit', 'Donec sed odio tempor, varius elit eu, consequat urna. Morbi bibendum vestibulum maximus. Vestibulum ut nibh ex. Quisque nulla ante, tristique in efficit', 87, 76, 95),
(5, 'Denis Green', 'barista4.jpg', 'Administrator', 28, 7, '0788443355', 'greendeni@gmail.com', '#', '#', '#', '#', 'Vestibulum vel dui luctus, congue sem vel, vehicula sapien. Vestibulum vitae pellentesque urna. Donec nibh tellus, imperdiet eget placerat a, dignissim eu ligula. Praesent diam tortor, fringilla vitae hendrerit eget, sodales id dui. Donec non nunc hendrerit, facilisis urna sit amet, laoreet libero. Ut ullamcorper ligula et purus tincidunt vehicula. Fusce a varius urna. Etiam tellus nisl, semper quis erat nec, sodales posuere odio. Nam semper turpis ipsum, ac consequat mauris maximus', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 89, 79, 87),
(6, 'Antony Taylor', 'barista3.jpg', 'Cook', 36, 3, '0786543212', 'tayloran@gmail.com', '#', '#', '#', '#', 'Vestibulum vel dui luctus, congue sem vel, vehicula sapien. Vestibulum vitae pellentesque urna. Donec nibh tellus, imperdiet eget placerat a, dignissim eu ligula. Praesent diam tortor, fringilla vitae hendrerit eget, sodales id dui. Donec non nunc hendrerit, facilisis urna sit amet, laoreet libero. Ut ullamcorper ligula et purus tincidunt vehicula. Fusce a varius urna. Etiam tellus nisl, semper quis erat nec, sodales posuere odio. Nam semper turpis ipsum, ac consequat mauris maximus', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet e', 78, 97, 89),
(7, 'Francis Habbant', 'barista2.jpg', 'Manager', 25, 5, '0876567809', 'habfranc@gmail.com', '#', '#', '#', '#', 'Vestibulum vel dui luctus, congue sem vel, vehicula sapien. Vestibulum vitae pellentesque urna. Donec nibh tellus, imperdiet eget placerat a, dignissim eu ligula. Praesent diam tortor, fringilla vitae hendrerit eget, sodales id dui. Donec non nunc hendrerit, facilisis urna sit amet, laoreet libero. Ut ullamcorper ligula et purus tincidunt vehicula. Fusce a varius urna. Etiam tellus nisl, semper quis erat nec, sodales posuere odio. Nam semper turpis ipsum, ac consequat mauris maximus', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 78, 65, 80),
(8, 'Marta Ferrari', 'barista1.jpg', 'Waiter', 26, 4, '0788443355', 'ferrarimar@gmail.com', '#', '#', '#', '#', 'Vestibulum vel dui luctus, congue sem vel, vehicula sapien. Vestibulum vitae pellentesque urna. Donec nibh tellus, imperdiet eget placerat a, dignissim eu ligula. Praesent diam tortor, fringilla vitae hendrerit eget, sodales id dui. Donec non nunc hendrerit, facilisis urna sit amet, laoreet libero. Ut ullamcorper ligula et purus tincidunt vehicula. Fusce a varius urna. Etiam tellus nisl, semper quis erat nec, sodales posuere odio. Nam semper turpis ipsum, ac consequat mauris maximus', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 'Praesent auctor viverra tellus vel gravida. Duis pulvinar quam vel tortor mattis, sit amet auctor dui rhoncus. Vivamus justo massa, ullamcorper quis eros et, bibendum aliquet eros. Cras dictum felis sed gravida', 89, 95, 97);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `errorimg`
--
ALTER TABLE `errorimg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pro_categories`
--
ALTER TABLE `pro_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pro_comments`
--
ALTER TABLE `pro_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pro_replies`
--
ALTER TABLE `pro_replies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pro_tags`
--
ALTER TABLE `pro_tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `errorimg`
--
ALTER TABLE `errorimg`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pro_categories`
--
ALTER TABLE `pro_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pro_comments`
--
ALTER TABLE `pro_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pro_replies`
--
ALTER TABLE `pro_replies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pro_tags`
--
ALTER TABLE `pro_tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
