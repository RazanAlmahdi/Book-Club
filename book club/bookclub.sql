-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(4) NOT NULL,
  `bookTitle` varchar(100) NOT NULL,
  `authorFirstName` varchar(10) NOT NULL,
  `authorLastName` varchar(10) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `quote` varchar(300) NOT NULL,
  `summary` mediumtext NOT NULL,
  `reflection` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookTitle`, `authorFirstName`, `authorLastName`, `genre`, `quote`, `summary`, `reflection`) VALUES
(1, 'Ikigai The Japanese Secret to a Long and Happy Life', ' Héctor ', 'García', 'Self-Help/Personal Development/Pschology', 'Only staying active will make you want to live a hundred years.', 'According to the Japanese everyone has an ikigai a reason for living. And according to the residents of the Japanese village with the world’s longest living people finding it is the key to a happier and longer life. Having a strong sense of ikigai the place where passion  mission vocation and profession intersect means that each day is infused with meaning It’s the reason we get up in the morning It’s also the reason many Japanese never really retire in fact there’s no word in Japanese that means retire in the sense it does in English They remain active and work at what they enjoy because they’ve found a real purpose in life the happiness of always being busy.   In researching this book, the authors interviewed the residents of the Japanese village with the highest percentage of 100 year olds one of the world’s Blue Zones. Ikigai reveals the secrets to their longevity and happiness: how they eat  how they move how they work how they foster collaboration and community and their best-kept secret how they find the ikigai that brings satisfaction to their lives. And it provides practical tools to help you discover your own ikigai. Because who doesn’t want to find happiness in every day.', 'It is a good book. My overall rating of the book has little to do with the quality of the writing or the underlying concept. The former is quite good and the latter is valid. My rating is strictly personal and relates more to who might be considering adding it to their reading list. Not a don’t for '),
(2, 'What I Know For Sure', ' Oprah ', 'Winfrey', 'Memoir/Autobiography', 'There is one irrefutable law of the universe We are each responsible for our own life.', 'As a creative force student of the human heart and soul and champion of living the life you want Oprah Winfrey stands alone. Over the years she has made history with a legendary talk show the highest rated program of its kind launched her own television network become the nation s only African American billionaire and been awarded both an honorary degree by Harvard University and the Presidential Medal of Freedom. From all her experiences she has gleaned life lessons which for fourteen years she s shared in O The Oprah Magazine s widely popular What I Know For Sure column a monthly source of inspiration and revelation. Now for the first time these thoughtful gems have been revised updated and collected in What I Know For Sure a beautiful cloth bound book with a ribbon marker packed with insight and revelation from Oprah Winfrey. Organized by theme joy resilience connection gratitude possibility awe clarity and power these essays offer a rare powerful and intimate glimpse into the heart and mind of one of the world s most extraordinary women while providing readers a guide to becoming their best selves. Candid moving exhilarating uplifting and frequently humorous the words Oprah shares in What I Know For Sure shimmer with the sort of truth that readers will turn to again and again.', 'I recently watched a workshop that asked us to pick someone who inspired us and say what their life s mission might be I picked Oprah Winfrey and wasn t really sure why so I bought this book. The book is beautiful it s a smaller size hardback with a gold ribbon and it feels special from the moment y'),
(3, 'Black Beauty', 'Anna ', 'Sewell', 'Literary/Fiction', 'It is good people who make good places.', 'The story is narrated in the first person as an autobiographical memoir told by the titular horse named Black Beauty—beginning with his carefree days as a foal on an English farm with his mother, to his difficult life pulling cabs in London, to his happy retirement in the country. Along the way, he meets with many hardships and recounts many tales of cruelty and kindness. Each short chapter recounts an incident in Black Beauty s life containing a lesson or moral typically related to the kindness, sympathy, and understanding treatment of horses, with Sewell s detailed observations and extensive descriptions of horse behavior lending the novel a good deal of verisimilitude. The book describes conditions among London horse-drawn cab drivers, including the financial hardship caused to them by high license fees and low, legally fixed fares. A page footnote in some editions says that soon after the book was published, the difference between 6-day cab licenses (not allowed to trade on Sundays) and 7-day cab licenses (allowed to trade on Sundays) was abolished and the cab license fee was much reduced.', 'Upon publication of the book, many readers related to the pain of the victimized horses, sympathized and ultimately wanted to see the introduction of reforms that would improve the well-being of horses.'),
(4, 'Fahrenheit 451', 'Ray ', 'Bradbury', 'Literary/Fiction', 'It was a pleasure to burn.', 'Fahrenheit 451 is set in an unspecified city in the year 2049 (according to Ray Bradbury s Coda), though it is written as if set in a distant future.The earliest editions make clear that it takes place no earlier than the year 1960. The novel is divided into three parts: The Hearth and the Salamander, The Sieve and the Sand, and Burning Bright. The Hearth and the Salamander Guy Montag is a fireman employed to burn books. One fall he meets Clarisse McClellan, whose free-thinking ideals cause him to question his life. Montag s mind is bombarded with Clarisse s subversive thoughts and the memory of his wife s near-death. Montag s wife, Mildred, panics over the thought of losing the house and her parlor wall family. Captain Beatty recounts the history of how books lost their value. The government turned firemen into officers of society s peace of mind by starting fires for the purpose of burning books. The Sieve and the Sand Montag meets Mildred s friend, Mrs. Bowles, who sets up a date for them to watch the parlor walls. Mildred Phelps, played by Hilary Swank, tries to kill herself again by overdosing on sleeping pills. Her friends leave in disgust, while Mildred locks herself in the bathroom and attempts suicide. A fire alarm sounds and Beatty picks up the address from the dispatcher system for Montag s house. Burning Bright Montag watches as Mildred walks out of the house, too traumatized about losing her parlor wall family to even acknowledge her husband s existence. Beatty discovers Montag s earpiece and plans to hunt down Faber. Another Mechanical Hound is released to track down and kill Montag. The film follows the survivors as they learn about the legendary phoenix and man s repeated mistakes.', 'In 1954, Galaxy Science Fiction reviewer Groff Conklin placed the novel among the great works of the imagination written in English in the last decade or more.'),
(5, 'Warm Bodies', 'Isaac ', 'Marion', 'Science/Fiction', 'I want to change my punctuation. I long for exclamation marks, but I m drowning in ellipses.', 'In a post-apocalyptic future, a male zombie still in the early stages of decay lives in an abandoned airport near the city. After the collapse of human civilization, zombies hunt for the living, seeking to eat their brains; doing so allows them to relive the memories, feelings, and thoughts of their prey. R, a Fleshy, is unusual as he shows distaste for eating human flesh, and can form several coherent syllables in one breath. His fellow zombie M is confused and angered by his behavior, but relents his attack on Julie. R follows her scent to an abandoned stadium converted into a community for human survivors, led by Julie s father Grigio.  After disguising himself as a human, R locates Julie s house and sees her on her balcony, and they reunite. He has further visions of Perry s memory; some form of  Perry s soul is inside R.', 'Marion explores the meaning of humanity through R s journey towards personhood, a tale that gets grander in scale as his empathy builds and the book s true villains—cynicism, apathy and status quo—are revealed.'),
(6, 'The Midnight Library: A Novel', 'Matt ', 'Haig', 'Science/Fiction', 'A feel-good book guaranteed to lift your spirits.', 'Somewhere out beyond the edge of the universe there is a library that contains an infinite number of books, each one the story of another reality. One tells the story of your life as it is, along with another book for the other life you could have lived if you had made a different choice at any point in your life. While we all wonder how our lives might have been, what if you had the chance to go to the library and see for yourself? Would any of these other lives truly be better?  In The Midnight Library, Matt Haig s enchanting blockbuster novel, Nora Seed finds herself faced with this decision. Faced with the possibility of changing her life for a new one, following a different career, undoing old breakups, realizing her dreams of becoming a glaciologist; she must search within herself as she travels through the Midnight Library to decide what is truly fulfilling in life, and what makes it worth living in the first place.', 'I was looking forward to this book. In fact, it’s the first book in years that I actually pre-ordered. The premise is interesting enough: there is an ethereal library that exists between life and death. You are permitted to choose any book from the shelves and each book contains an alternative life.'),
(7, 'The Humans', 'Matt ', 'Haig', 'Science/Fiction', 'Make sure, as often as possible, you are doing something you’d be happy to die doing.', 'When an extra-terrestrial visitor arrives on Earth, his first impressions of the human species are less than positive. Taking the form of Professor Andrew Martin, a prominent mathematician at Cambridge University, the visitor is eager to complete the gruesome task assigned him and hurry home to his own utopian planet, where everyone is omniscient and immortal.  He is disgusted by the way humans look, what they eat, their capacity for murder and war, and is equally baffled by the concepts of love and family. But as time goes on, he starts to realize there may be more to this strange species than he had thought. Disguised as Martin, he drinks wine, reads poetry, develops an ear for rock music, and a taste for peanut butter. Slowly, unexpectedly, he forges bonds with Martin’s family. He begins to see hope and beauty in the humans’ imperfection, and begins to question the very mission that brought him there.  Praised by The New York Times as a “novelist of great seriousness and talent,” author Matt Haig delivers an unlikely story about human nature and the joy found in the messiness of life on Earth. The Humans is a funny, compulsively readable tale that playfully and movingly explores the ultimate subject—ourselves.', 'There are books we read that we enjoy immensely at the moment, but their memory fades, sometimes much faster than we would have predicted. Then there are others that literally leave their mark upon us, on our minds ... sometimes, if we’re especially lucky, upon our very souls.  I’m happy to report t'),
(8, 'I Am Malala', 'Malala ', 'Yousafzai', 'Memoir/Autobiography', 'One child, one teacher, one book, one pen can change the world.', 'Malala Yousafzai describes her childhood home Swat Valley and the rise and fall of the Tehrik-i-Taliban Pakistan in Swat. She lived with her father Ziauddin, her mother Toor Pekai and two younger brothers Khushal and Atal. During the First Battle of Swat, Malala begins to write a BBC Urdu blog under the pseudonym \"Gul Mukai\". Her school is shut down following a Taliban edict in 2009, and her family are forced to move to Shangla for three months. The book also describes the continuing War in North-West Pakistan, and the assassination of Benazir Bhutto.  She is critical of the Taliban and the armys ineffectiveness against the Taliban. One bullet travelled from her left eye to her shoulder; her friends Shazia and Kainat were also non-fatally injured.', 'Malala s bravely eager voice can seem a little thin here, in I Am Malala, likely thanks to her co-writer, but her powerful message remains undiluted'),
(9, 'The Unexpected Guest', 'Agatha ', 'Christie', 'Law/Criminology', 'Men and women don t react in the same way. What it comes down to is this. Men are the more sensitive sex. Women are tough. Men can t take murder in their stride. Women apparently can. The fact is, if a man s committed a murder for a woman, it probably enhances his value in her eyes. A man feels diff', 'On a foggy night, the car of a man called Michael Starkwedder breaks down near an isolated house and, entering it, he finds the body of a dead man slumped in a chair. A woman stands over the corpse, gun in hand, and confesses to the murder. She gives her name as Laura Warwick, the wife of the dead man. She explains that he was always drunk and abusive. Michael decides not to turn her in to the police, and the two decide to come up with a cover-up story to protect Laura. In the end, they settle on an enemy from the past, by the name of MacGreggor, whose son was run over by Richard Warwick, the dead man, several years ago. They slip a paper in Richard s pocket with the date of the accident, saying \"Paid in full.\" Then they stage the murder so it appears to have been recent, alerting the residents of the building.  The police are soon alerted and begin to investigate. It is revealed that MacGreggor is dead, and suspicions are exchanged. Meanwhile, Michael discovers that Laura was having an affair with another man, whom she believes murdered Richard. He, however, believes her to be guilty. Finally, it is revealed that Michael is MacGreggor and he had come to avenge his son. He shouts this to Laura, along with the fact that he cares for her, and jumps through the window, running away.', 'As you read it is obvious that it is derived from a play because the entire novel takes place in one room.'),
(10, 'The Gaze', ' Elif', ' Shafak', 'Self-Help/Personal Development/Pschology', 'I didn t say anything. I didn t return his smiles. I looked at him in the wide mirror in front of where I was sitting. He grew uncomfortable and avoided my eyes. I hate those who think fat people are stupid.', 'An obese woman and her lover, a dwarf, are sick of being stared at wherever they go, and so decide to reverse roles. The man goes out wearing make up and the woman draws a moustache on her face. But while the woman wants to hide away from the world, the man meets the stares from passers-by head on, compiling his Dictionary of Gazes to explore the boundaries between appearance and reality. Intertwined with the story of a bizarre freak-show organized in Istanbul in the 1880s, The Gaze considers the damage which can be inflicted by our simple desire to look at others.', 'I have to say that Elif Shafak is one of the writers I like best, however, in this book I feel that is not the best of this autot.'),
(11, 'The Masque of the Red Death', 'Edgar ', 'Allan ', 'Horror', '\"Even with the utterly lost, to whom life and death are equally jests, there are matters of which no jest can be made.\"', 'The story takes place at the castellated abbey of the \"happy and dauntless and sagacious\" Prince Prospero. Prospero and 1,000 other nobles have taken refuge in this walled abbey to escape the Red Death, a terrible plague with gruesome symptoms that has swept over the land. Victims are overcome by \"sharp pains\", \"sudden dizziness\", and \"profuse bleeding at the pores\", and die within half an hour. Prospero and his court are indifferent to the sufferings of the population at large; they intend to await the end of the plague in luxury and safety behind the walls of their secure refuge, having welded the doors shut.  Prospero holds a masquerade ball one night to entertain his guests in seven colored rooms of the abbey. Each of the first six rooms is decorated and illuminated in a specific color: blue, purple, green, orange, white, and violet. The last room is decorated in black and is illuminated by a scarlet light, \"a deep blood color\" cast from its stained glass windows. Because of this chilling pairing of colors, very few guests are brave enough to venture into the seventh room. A large ebony clock stands in this room and ominously chimes each hour, upon which everyone stops talking or dancing and the orchestra stops playing. Once the chiming stops, everyone immediately resumes the masquerade.  At the chiming of midnight, the revelers and Prospero notice a figure in a dark, blood-splattered robe resembling a funeral shroud. The figure s mask resembles the rigid face of a corpse and exhibits the traits of the Red Death. Gravely insulted, Prospero demands to know the identity of the mysterious guest so they can hang him. The guests, too afraid to approach the figure, instead let him pass through the six chambers. The Prince pursues him with a drawn dagger and corners the guest in the seventh room. When the figure turns to face him, the Prince lets out a sharp cry and falls dead. The enraged and terrified revelers surge into the black room and forcibly remove the mask and robe, only to find to their horror that there is nothing underneath. Only then do they realize the costume was empty and all of the guests contract and succumb to the disease. The final line of the story sums up, \"And Darkness and Decay and the Red Death held illimitable dominion over all.\"', 'I enjoy Edgar Allan Poe so much; however, I still did not manage to get through all of his short stories, but I ll be definitely working on correcting that oversight.'),
(12, 'The Kite Runner', 'Khaled ', 'Hosseini', 'Historical/Fiction', 'It may be unfair, but what happens in a few days, sometimes even a single day, can change the course of a whole lifetime', 'Part I Two boys, Amir and Hassan, spend their days kite fighting in the hitherto peaceful city of Kabul. Amir s mother died in childbirth, while Hassan s mother, Sanaubar, simply abandoned him and Ali. Assef, an older boy with a sadistic taste for violence, mocks Amir for socializing with an Hazara, according to him, an inferior race. Amir finds a kinder fatherly figure in Rahim Khan, Baba s closest friend, who understands him and supports his interest in writing. Amir witnesses Hassan rape Assef in an alleyway after Hassan refuses to give up the kite, and is too scared to intervene. He feels incredibly guilty but knows his cowardice would destroy any hopes for Baba s affections, so he keeps quiet about the incident. Baba believes \"there is no act more wretched than stealing\", and forgives Hassan. Amir begins to believe that life would be easier if Hassan were not around, and so he plants money under Hassan s mattress in the hope that Baba will make him leave. Part II Amir s father-in-law Baba is diagnosed with terminal cancer and dies shortly after his wedding to Soraya Taheri. Amir embarks on a successful career as a novelist. His father s best friend Rahim Khan enigmatically tells him, \"There is a way to be good again\". Part III Khan also reveals that Ali was not Hassan s biological father. Khan asks Amir to rescue Hassan s son, Sohrab, from an orphanage in Kabul. Assef agrees to relinquish Sohrab if Amir can beat him in a fight.', ' gripping and emotional story of betrayal and redemption, The Kite Runner had me thrilled and moved, both at the same time. It tells the story of Amir and Hassan, the closest of friends, as good as brothers, and also experts in the art of kite flying');

-- --------------------------------------------------------

--
-- Table structure for table `eventattendance`
--

CREATE TABLE `eventattendance` (
  `SID` varchar(9) NOT NULL,
  `eventID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventattendance`
--

INSERT INTO `eventattendance` (`SID`, `eventID`) VALUES
('leen33', 5);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(5) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `eventDate` date NOT NULL,
  `vps` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `eventTitle` varchar(30) NOT NULL,
  `eventDesc` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `startTime`, `endTime`, `eventDate`, `vps`, `location`, `eventTitle`, `eventDesc`, `image`) VALUES
(4, '13:00:00', '19:00:00', '2022-01-19', '2 Ibhath', 'Jeddah Book Fair', 'Jeddah Book Fair', 'Join us on our trip to Jeddah Book Fair', 0x626f6f6b666169722e6a7067),
(5, '06:08:00', '07:10:00', '2022-01-05', '4 Qiyam', 'A&R 402', 'Hi!', 'Get to know the team', 0x636f72657465616d2e6a706567),
(6, '13:00:00', '14:00:00', '2021-09-27', '2 Riyada', 'A&R Lobby', 'Effat Club Fair', 'Stop by Effat\'s Book Club\'s booth and get the chance to get a free bookmark and become a member!', 0x636c7562466169722e6a7067),
(7, '13:00:00', '14:00:00', '2021-03-15', '2 Ibhath', 'Cultural Museum', 'On Becoming an Author', 'An online talk with our fellow Effatie, Rana Matar!', 0x52616e614d617461722e706e67),
(8, '13:00:00', '14:00:00', '2021-02-17', '2 Qiyam', 'Online', 'Reading To Rise!', 'An online talk via Blackboard titled \"Reading To Rise\".', 0x6f6e6c696e6554616c6b2e6a7067),
(9, '13:00:00', '14:00:00', '2019-09-25', '2 Riyada', 'Cultural Museum', 'First Official Meeting', 'The first official meeting of Effat\'s Book Club with Dr. Ayman Eddakrouri', 0x66697273744d656574696e672e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `SID` char(9) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `major` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `accType` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`SID`, `pass`, `firstName`, `lastName`, `email`, `major`, `year`, `interest`, `message`, `accType`) VALUES
('', '', '', '', '', '', '', '', '', NULL),
('leen33', '5a5e1852ed2ee7ef0c7a8841c1af1722', 'Leen', 'Almalki', 'leen@leen.leen', 'ComputerScience', 'Senior', 'Adventure', 'Hi Everyone!! My name is Leen Almalki I am the leader of the book club. Welcome you all in this club where we Read to Rise!', 'admin'),
('S16102526', '17a95d873faa122e0b163e33e34e9768', 'Shefaa', 'Shalabi', 'shefaa@gamil.com', 'Finance', 'Senior', 'Politics/SocialSciences', 'Hi my name is Shefaa. I am a Finance senior student and I like to read Poli-Sci books because they keep me update on political and financial trends.', NULL),
('S16106132', '97d7060d5a09a625c450265516d444a9', 'Rana', 'Matar', 'rana@gmail.com', 'ComputerScience', 'Senior', 'Science/Fiction', 'Hi my name is Rana Matar. I am a Computer Science senior student and I like to read science fiction and horror stories.', NULL),
('S17106132', 'bd612f4c2ca5410ef8a2cce84b13d309', 'Reham', 'Alharbi', 'reham@gmail.com', 'Entrepreneurship', 'Senior', 'Religion/Spirituality', 'Hi my name is Reham I am a Entrepreneurship senior student and I like spiritual books because they give you a peaceful mind and enrich your wisdom.', NULL),
('S17106522', 'd64d513797ffaae2914da88dadd41a3c', 'Sumayyah', 'Yusuf', 'sumayyah@gmail.com', 'HumanResourcesManegement', 'Senior', 'Humor/Entertainment', 'Hi my name is Sumayyah. I am a HR senior student and I like to read books for fun and entertainment. I read books to unwind from the stress of university.', NULL),
('S18102194', '23c1622d0f5af8a8a8cd90dd1898f3cb', 'Mumu', 'Rahman', 'mumu@gmail.com', 'EnglishandTranslation', 'Junior', 'Romance', 'Hi my name is Mumu. I am a E&T junior student and I like to read romance fiction and adventure books. So excited to be part of this club.', NULL),
('S18102233', 'f6852b2a3ac0cd7e69c801f69eddb57a', 'Salma ', 'Metwally', 'salma@gmail.com', 'Architecture', 'Junior', 'Self-Help/Personal Development', 'Hi my name is Salma. I am a Architecture junior student and I like to read self development books.', NULL),
('S18102565', '4502911686e1eccf8b5154cf5466ea65', 'Nafisah', 'Ayub', 'nafisah@gmail.com', 'Psychology', 'Junior', 'Detective/Mystery', 'Hi my name is Nafisah. I am a Psychology junior student and I like to read crime novels particularly Agatha Christie novels.', NULL),
('S18102838', '48288243b0164df8b63dc8358f58300a', 'Shahd', 'Teskyeh', 'shahd@gmail.com', 'ElectricalandComputerEngeneering', 'Sophomore', 'Travel', 'Hi my name is Shahd. I am a ECE sophomore student and I like to travel and read travel books and watch travel blogs I am fond of travel.', NULL),
('S19102526', 'd1cb59e3b1f6c3187874e8edcb2ca1c9', 'Assel', 'Domyati', 'assel@gmail.com', 'Entrepreneurship', 'Sophomore', 'Biography<y', 'Hi my name is Assel I am a Entrepreneurship sophomore student and I like to read biographies and autobiographies it makes you live other people lives, which I believe is the purpose of reading.', NULL),
('S19103140', '43b1f69ac122bc6931ad9d7c179cb230', 'Zainah', 'Aljahdali', 'zainah@gmail.com', 'Design', 'Sophomore', 'Romance', 'Hi my name is Zainah. I am a Design sophomore student and I like to read romance books.', NULL),
('S19103243', '11f0b148a918c243f3f9869a2f503128', 'Amal', 'Shaikh', 'amalS@gmail.com', 'ElectricalandComputerEngineering', 'Sophomore', 'Historical/Fiction', 'Hi my name is Shahd. I am a ECE sophomore student and I like to read historical fiction like Game of Thrones.', NULL),
('S20102051', '5bd537fc3789b5482e4936968f0fde95', 'Sara', 'Softah', 'sara@gmail.com', 'ComputerScience', 'Sophomore', 'Fantasy', 'Hi my name is Sara. I am a Computer Science sophomore student and I like to read fantasy, magical and science fiction books. I also like to read mangas.', NULL),
('S20103220', '3ba482ecb56ba605fb5dee188f44cfdd', 'Rawan', 'Mashat', 'rawan@gmail.com', 'Finance', 'Freshman', 'Historical/Fiction', 'Hi my name is Rawan. I am a Finance freshmen student and I like to read historical fiction, I also watch alot of movies about old kingdoms and civilizations.', NULL),
('S20103221', '46e64877a7096b7f6343fdf80d03b6ea', 'Rawan', 'Alshatiri', 'rawanA@gmail.com', 'Architecture', 'Freshman', 'Art/Photography', 'Hi my name is Rawan Alshatiri. I am a Architecture freshmen student and I really like to read art books and photographers catalogues am into photography.', NULL),
('S20104045', 'e4d72ffdbc76143000548711ea8bbfbe', 'Retal', 'Nassar', 'retal@gmail.com', 'ComputerScience', 'Sophomore', 'Thriller', 'Hi my name is Retal. I am a Computer Science sophomore student and I like to read thriller and adventure books.', NULL),
('S20106549', '16b5480e7b6e68607fe48815d16b5d6d', 'Amal', 'Alansari', 'amal@gmail.com', 'SupplyChainManegement', 'Freshman', 'Thriller', 'Hi my name is Amal. I am a SCM freshmen student and I really like to read thriller books and looking forward to being part of this club :).', NULL),
('S20106649', '360062f5a2874b4226a14006ef223124', 'Razan', 'AlMahdi', 'razan@gmail.com', 'ComputerScience', 'Sophomore', 'Literary/Fiction', 'Hi my name is Razan. I am a Computer Science sophomore student and I like to read alot of genres and I am looking forward to being part of this club.', NULL),
('S20109223', 'e0807c07ef731ee3e5a8ae6b6ecc57bc', 'Razan', 'Daghistani', 'razanD@gamil.com', 'Design', 'Sophomore', 'Memoir&Autobiography', 'Hi my name is Razan Daghistani. I am a Design sophomore student and I like to read autobiographies because they are really inspiring and they teach you lots of things.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `eventattendance`
--
ALTER TABLE `eventattendance`
  ADD KEY `eventID` (`eventID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
