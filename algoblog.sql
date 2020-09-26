-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 09:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `algoblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(12) NOT NULL,
  `title` varchar(300) NOT NULL,
  `txt` text NOT NULL,
  `tag` varchar(300) NOT NULL,
  `posterid` int(12) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `cover_image` varchar(250) DEFAULT NULL,
  `post_image1` varchar(250) DEFAULT NULL,
  `post_image2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `txt`, `tag`, `posterid`, `date`, `status`, `cover_image`, `post_image1`, `post_image2`) VALUES
(13, 'User post title', 'user post content', 'User post title', 22, '2020-09-25', 'pending', NULL, NULL, NULL),
(23, 'AIUB Computer Club (ACC) Organized Virtual Orientation of Summer 19-20', '     On 28th August 2020, AIUB Computer Club (ACC) successfully organized the â€œVirtual Orientation Programâ€ for the newly recruited members of the Summer 2019-20 semester using the online platform Google Meet. This semester, from 264 students who applied for the membership of AIUB Computer Club ACC), 58 students were selected through the online viva session.\r\n\r\nThe program started at 7:30 PM with the presence of new and current club members, current and former executives, advisors, and special guests. The hosts of the evening were Prajna Shirsho Shome, General Member, ACC, and Abdus Shakur, General Member, ACC. They started the event by welcoming the newly recruited members of the club. Then, Sultan Mahmud Polash, Assistant General Secretary-Events, ACC, presented his speech by introducing the mission and vision of the club. Then, Abdur Rahman Emon, Assistant General Secretary-Events, ACC, mentioned about different leading events organized by ACC. Next, special guests Mr. Manzur H. Khan, Associate Professor, FST, and the Director of Office of Student Affairs (OSA), Abhijit Bhowmik, Associate Professor, and Special Assistant of OSA, and Md. Rakibul Alam [Polok], Officer of OSA, graced the program with their presence. Mr. Manzur H. Khan congratulated the newly recruited members and gave them words of encouragement for their future. Afterward, Mr. Abhijit Bhowmik requested the new members to follow the rules and regulations of the university and the club and expressed great expectations from every member. Along with that, he requested the former executives to share their experiences with the new members. Mr. Rakibul Alam also complimented the club and the hard work and efforts of its members.Test Update 123     asdfasdfasdfasdfasdfasdfsadf', 'AIUB Computer Club (ACC) Organized Virtual Orientation of Summer 19-20', 3, '2020-09-25', 'approved', '99f16d388736f651ac198bf317974481.jpg', 'a24bdc3e59a4c624eee8318a51bb55b9.png', '5e751896e527c862bf67251a474b3819.png'),
(24, 'AIUB IS NOW A SIGNATORY TO THE CLASSIC MAGNA CHARTA UNIVERSITATUM', '  It is with utmost pride and honor to qualify to be a signatory to the classic and exclusive association of universities in Europe. With its rigid requirements and thorough assessment, the American International University- Bangladesh has been successfully granted the privilege to be a signatory to the document in a glorious ceremony to held in Bologna, Italy in June 16-17, 2021. No less than the Vice Chancellor, Dr. Carmen Z. Lamagna, AIUB was invited to be present to sign the document with a deep historical value. The grand ceremony was originally scheduled in the second week of September but was postponed due to this pandemic which adversely affecting the whole world. The congratulatory message was sent by Dr. Sijbolt Noorda, President, Magna Charta Observatory on behalf of the Governing Council.\r\n\r\nWhat is MAGNA CHARTA UNIVERSITATUM (the Great Charter Universities)? It is a document originally signed by 388 Rectors and Heads of Universities from all over Europe and now beyond in 1988. The event coincides with the 900 Years Anniversary Foundation of the University of Bologna, Italy. The document contains principles of academic freedom and institutional autonomy as a guideline for good governance and self-understanding of universities in the future. The document provides the opportunity to celebrate university traditions and encourage bonds among European universities and also to serve as universal inspiration and is open to the universities of the world. As a result, universities now operate internationally, have to respond more quickly to larger number  and more diverse learners and research requirements, use of advance technology, different modes of delivery and are challenged and equitable serving the diverse needs of a wider range of local, national and international stakeholders. It engages in a wide range of activities and projects held in different countries events such as conferences, workshops, printed and web-based resources.  asdasdasd asd as das das das dasd asd', 'AIUB IS NOW A SIGNATORY TO THE CLASSIC MAGNA CHARTA UNIVERSITATUM', 3, '2020-09-25', 'approved', '3a824154b16ed7dab899bf000b80eeee.png', 'a2f04745390fd6897d09772b2cd1f581.png', 'a08e32d2f9a8b78894d964ec7fd4172e.png'),
(25, 'test title 123123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget finibus enim. Sed auctor, dolor quis blandit sodales, felis justo rhoncus quam, sed pharetra est mauris sed neque. Vestibulum lobortis, ex at vehicula accumsan, risus justo interdum ante, at euismod arcu nisl non leo. Morbi et enim nec velit interdum gravida sed vel odio. Maecenas rhoncus ut dui eget mattis. Integer non congue lacus, at pellentesque diam. Aenean aliquet ultricies est nec placerat. Vestibulum condimentum at tellus et vestibulum. Integer non finibus urna. Etiam eu dui tellus. Nullam blandit urna malesuada sollicitudin lobortis. Nulla vel tristique nulla, id sagittis mauris. Mauris tincidunt sapien sit amet convallis viverra.\r\n\r\nPhasellus interdum ornare nisl quis viverra. Curabitur sed orci eget augue condimentum ullamcorper. Integer sodales sit amet mi vitae sagittis. Fusce scelerisque, tortor eget tempus finibus, orci purus cursus dui, ac pharetra ipsum magna quis justo. Aenean volutpat fermentum rutrum. Pellentesque tincidunt sagittis erat. Nam non vehicula turpis. Aenean id diam et erat aliquam egestas eu nec lorem. Nulla facilisi. Donec ut quam mollis enim aliquam sodales. Donec a mollis urna. Nam egestas rutrum justo non aliquet. Etiam a erat eros. Pellentesque porta convallis dolor, nec egestas neque tincidunt sit amet.\r\n\r\nSed commodo dolor enim, vitae viverra purus fermentum eget. Maecenas sit amet lectus libero. Sed ac tellus elementum, molestie est non, pretium arcu. Sed velit nulla, sagittis ut velit feugiat, pharetra gravida ipsum. Pellentesque non tellus cursus, dignissim ante ut, dapibus elit. Pellentesque neque turpis, elementum quis leo non, lobortis faucibus urna. Nulla id imperdiet felis. Ut gravida ac est aliquet interdum. Aenean nunc sapien, lobortis id tincidunt sed, sollicitudin quis mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nQuisque turpis ligula, vestibulum id leo eu, laoreet suscipit sapien. Sed mauris metus, egestas a aliquam id, bibendum lacinia magna. Nullam sit amet ultricies sapien. Curabitur vehicula libero turpis, a cursus tellus fringilla sed. Integer faucibus ligula a felis dignissim, eget sagittis eros consequat. Nulla ut eleifend turpis. Suspendisse lectus sapien, mollis eget velit vitae, blandit commodo nisl. Proin vel consequat purus. Vivamus suscipit purus et interdum tincidunt. Ut vehicula volutpat lobortis. Nulla sit amet tellus est. Nunc cursus, dui eget aliquam pellentesque, mi nunc ultrices mi, in euismod sapien ex nec erat. Sed non fermentum dolor, sit amet bibendum dolor. Mauris tempus nisi eu elit tincidunt, quis vestibulum purus pulvinar. Nullam erat massa, iaculis id urna ut, elementum eleifend ipsum. Integer tincidunt sodales ultrices.\r\n\r\nIn nec fermentum quam, ac sagittis nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus leo libero, dictum et bibendum ut, tempus sed ex. Vivamus euismod, leo eu tempor placerat, tellus ligula varius mi, in tincidunt diam velit molestie dolor. Ut eget purus congue elit pellentesque varius. Praesent rhoncus congue placerat. Vivamus ultricies quam ac dolor blandit feugiat. Ut orci massa, dictum ut lectus sit amet, vulputate consectetur ipsum. Nam ac eros pretium, vehicula orci vitae, vulputate nunc. Phasellus pretium enim quis ipsum ullamcorper vehicula. Mauris vel ipsum at odio dapibus sodales. Integer enim enim, efficitur id urna a, ultricies feugiat ligula. Curabitur euismod magna vel tellus fringilla dignissim.', 'test title 123123', 22, '2020-09-25', 'pending', '6b1a864b240fc77e3a901e3470b243f9.png', 'bdeeecd97342dada47213d06bbd67c2c.jpg', '8b3bac12926cc1d9fb5d68783376971d.jpg'),
(27, 'LightOJ – 1178 – Trapezium', '    আলোচনাঃ\r\n\r\n      আমাদেরকে একটা Trapezium দেয়া হবে। তার ক্ষেত্রফল বের করতে হবে।\r\n\r\nউত্তরঃ\r\n\r\nআমরা জানি, Trapezium এর ক্ষেত্রফল = 0.5*( সমান্তরাল বাহুদ্বয়ের যোগফল * উচ্চতা )\r\n\r\nআমাদের সমান্তরাল বাহুদ্বয়ের মান দেয়া আছে । শুধু উচ্চতা বের করলেই হলো। তো এটা দুইভাবে করা যায়।\r\n\r\n\r\n1)\r\n\r\nTrapezium ABFD তে AB এর সমান করে DE বাহু আকি। তাহলে ADBE সামান্তরিক তৈরি হলো। এখন , AD = BE and AB = DE. So, BE = c , DE = d\r\n\r\nand EF = a-c = x . ধরি DK = h\r\n\r\n△DEF হতে পাই,\r\n\r\n=> s = (DE+EF+DF)/2\r\n\r\nSO, Area of △DEF = sqrt(s*(s-DE)*(s-EF)*(s-DF))\r\n\r\n                             = sqrt(s*(s-d)*(s-x)*(s-b)\r\n\r\nআবার আমরা জানি,  △DEF= 0.5*EF*DK\r\n\r\n                                          = 0.5*x*h\r\n\r\nতাহলে আমরা লিখতে পারি,\r\n\r\n          0.5*x*h = sqrt(s*(s-d)*(s-x)*(s-b))\r\n\r\n    So, h = ( sqrt(s*(s-d)*(s-x)*(s-b)) * 2) / x \r\n\r\n\r\n 2)\r\n\r\nআমরা a এর উপর দুইটা লম্ব টানবো ।  লম্ব টানার পর একটা অংশকে যদি x ধরি তাহলে অপরটা হয় (a-x). তাহলে দুইটা সমকোণী ত্রিভুজ তৈরি হলো।\r\n\r\n△ABC থেকে পাই,\r\n\r\n       Here, big= (a-c)\r\n\r\n       d^2 = (big-x)^2 + h^2 ———-(1)\r\n\r\n△DEF থেকে পাই,\r\n\r\n       b^2 = h^2 + x^2\r\n\r\n  =>h^2 = b^2 – x^2 ————–(2)\r\n\r\nFrom (1),\r\n\r\n    d^2 = (big-x)^2 + h^2\r\n\r\n=>d^2 = (big-x)^2 + b^2 – x^2\r\n\r\n=>d^2 = big^2 + x^2 – 2*big*x  + b^2 – x^2\r\n\r\n=>d^2 = big^2 – 2*big*x  + b^2\r\n\r\nSO, x = (big^2 + b^2 – d^2) / (2*big)\r\n\r\nSo, h = sqrt(b*b – x*x)\r\n  ', 'LightOJ – 1178 – Trapezium', 3, '2020-09-26', 'approved', 'c7be03f5d811ed29c328526ca8ab0d61.PNG', '685bfde03eb646c27ed565881917c71c.png', '0e16366727185813f59d4a9467878901.png'),
(29, 'LightOJ – 1211 – Intersection of Cubes', 'আলোচনাঃ\r\nআমাকে কতগুলো cube এর স্থানাংক(দুইটা corner এর স্থানাংক) দেয়া থাকবে। আমাকে বলতে হবে যে, cube গুলোর intersection এর volume কত হবে। মানে কি? উপরের চিত্র তে 2 no case টার 2D ছবি দেয়া হয়েছে(ধরে নিই এগুলো cube). সবুজ রং এর cube টার নিচের corner এর স্থানাংক (x1,y1,z1) এবং উপরের corner এর স্থানাংক (x2,y2,z2). এই cube এর ভেতরে আছে কমলা রং এর cube. আবার এর ভেতরে আছে বেগুনি রং এর cube. তাহলে এই তিন cube এর intersection volumn কি বেগুনি রং এর cube টার volume হওয়ার কথা না? কারণ তিনটা cube এরই common area হচ্ছে বেগুনি রং cube টার volume.\r\n\r\nউত্তরঃ\r\nআমরা জানি, আয়তন = দৈর্ঘ্য * প্রস্থ * উচ্চতা\r\n\r\nতাহলে এদের মান জানলেই হবে। কিন্তু বেগুনি রং এর cube এর দৈর্ঘ্য ,প্রস্থ ও উচ্চতাই বা কতো?\r\nচিত্র থেকে দেখতে পাচ্ছি, বেগুনি রং এর cube এর left lower corner এর x1,y1,z1 হচ্ছে, সবগুলো cube এর x1,y1,z1 এর মধ্যে সব থেকে বড় মান। অপরদিকে, বেগুনি রং এর cube এর right upper corner এর x2,y2,z2 হচ্ছে, সবগুলো cube এর x2,y2,z2 এর মধ্যে সব থেকে ছোট মান। তাহলে আমাদের বের করা দরকার সব x1,y1,z1 এর মধ্যকার বড় মান এবং সব x2,y2,z2 এর মধ্যকার ছোট মান।\r\n\r\nআর দৈর্ঘ্য ,প্রস্থ ও উচ্চতার মান হবে বড় মান থেকে ছোট মান এর বিয়োগফল।', 'LightOJ – 1211 – Intersection of Cubes', 22, '2020-09-26', 'approved', '77d2afcb31f6493e350fca61764efb9a.PNG', '72bcba983cd3b0bf1d4251311d8b3772.png', '903cc7be42d6fae3ae8c8be791ceeb74.png'),
(30, 'LightOJ – 1216 – Juice in the Glass', 'আলোচনাঃ\r\nপ্রশ্ন অনুসারে আমাকে juice এর volumn বের করা লাগবে। juice যদি glass এর পুরো অংশ জুড়ে থাকতো তাহলে সূত্র হচ্ছে,\r\nvolume,V= (pi/3)*h*(r1*r1 + r2*r2 + r1*r2); here r1 is for height,h. ——(1)\r\n\r\nতবে আমাদের পুরো glass জুড়ে juice নাই। juice আছে height ,p পর্যন্ত।\r\n\r\nকিন্তু আমাদের height, p এর জন্য r1 জানা নাই। তাহলে আমরা যদি height=p এর জন্য r1 বের করতে পারি তবেই আমরা juice এর volume বের করতে পারবো।\r\n\r\nউত্তরঃ\r\nচিত্র থেকে দেখতে পাচ্ছি, লাল line থেকে কমলা line পর্যন্ত দৈর্ঘ্য সর্বদা r2. তাহলে প্রতি একক দৈর্ঘ্যে নীল অংশের দৈর্ঘ্য কতটুকু বাড়ছে সেটাই হবে তাহলে extra কতটুকু বাড়ছে।তাহলে নতুন r1 হবে (extra+r2) . extra অংশটুকু নিচের মতো করে calculate করতে পারি –\r\n\r\nheight যখন h তখন বাড়বে ——> (r1-r2)\r\nheight যখন 1 তখন বাড়বে ——-> (r1-r2)/h\r\nheight যখন p তখন বাড়বে ——> ((r1-r2)*p)/h = extra\r\n\r\nতাহলে , newR1 = r2 + extra , এটা লিখতে পারি। আর এটাই আমাদের নতুন r1.\r\n\r\nFrom (1) ,\r\nvolume , V= (pi/3)* p (newR1 newR1 + r2*r2 + newR1 *r2)', 'LightOJ – 1216 – Juice in the Glass', 22, '2020-09-26', 'approved', '4ea83d951990d8bf07a68ec3e50f9156.PNG', '6e4621af9a4da94a7c85d7ecd19b1271.png', '62ac9cd1eac1b6b1d204d458ee016173.png'),
(31, 'LightOJ – 1056 – Olympics', 'আলোচনাঃ\r\nআমাকে a আর b এর অনুপাত দেয়া থাকবে। আমাকে a,b এর দৈর্ঘ্য বের করা লাগবে। আর একটা কথা বলা আছে যে, Track এর পরিসীমা হবে 400 মিটার। Track এর length = a কিন্তু width = s হবে। তাই আমদের ‘s’ বের করা লাগবে।\r\n\r\nউত্তরঃ\r\nপ্রশ্নে দেওয়া চিত্রটাকে আমরা নিচের চিত্রের মতো করে আঁকতে পারি। তাহলে একটা বৃত্তের ভেতর একটা আয়তক্ষেত্র আছে। এখন বৃত্তের কেন্দ্র যদি O হয়, তাহলে ব্যাসার্ধ OA = r এবং ব্যাস, AC = 2r হবে। অপরদিকে , যেহেতু আয়তক্ষেত্রের বিপরীত বাহুগুলো সমান তাই,\r\nAB = DC = a এবং AD = BC = b.\r\n\r\nOlympics\r\nOlympics ( Image 1)\r\nতাহলে △ADC হতে পাই,\r\n(2r)^2 = b^2 + a^2\r\n=>r = sqrt((b^2 + a^2))/2 ——-(1)\r\n\r\nঅপরদিকে, বৃত্তচাপ , s = rθ —-(2)\r\n\r\nউপরের চিত্র থেকে লিখতে পারি, cosθ = (r*r + r*r – b*b)/(2.0*r*r).এখান থেকে θ এর মান বের করতে পারবো।\r\n\r\nআমরা জানি, আয়তক্ষেত্রের পরিসীমা = 2(a+b). কিন্তু এখানে b=s হবে। তাই আমরা লিখতে পারি,\r\n2(a+s) = 400\r\n=> 2(a+rθ) = 400 [ From (2) ] —(3)\r\n\r\nএখন , a আর b হচ্ছে অনুপাত। তো আমরা ধরে নিই length,width = x. তাহলে অনুপাতের সাথে x এর মান গুণ দিলেই length এবং width এর মান পাবো।\r\n\r\nFrom (3),\r\n=> 2(ax+xrθ) = 400\r\n=> x(2a+2rθ) = 400\r\nSo,x = 400/(2a+2rθ)\r\nএখন, x এর মান বের করে a,b এর সাথে গুণ দিলেই বাহুর দৈর্ঘ্য পাবো।', 'LightOJ – 1056 – Olympics', 22, '2020-09-26', 'approved', 'c950cde9b3f83f41721788e3315a14a3.PNG', '92a0e7a415d64ebafcb16a8ca817cde4.png', 'd58f36f7679f85784d8b010ff248f898.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(18) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin'),
(22, 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1@gmail.com', 'user'),
(24, 'sdfsadfq32afdasdfasf', '8162a92f06459b43642d2f1ac2f4b424', 'sdfsaasfsadfdfq32afd@gmail.com', 'user'),
(25, 'test123', 'cc03e747a6afbbcbf8be7668acfebee5', 'test123@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_ibfk_1` (`posterid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`posterid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
