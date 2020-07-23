-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-23 10:02:48
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `coffee`
--

-- --------------------------------------------------------

--
-- 資料表結構 `beandry`
--

CREATE TABLE `beandry` (
  `processId` int(11) NOT NULL,
  `processName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `beandry`
--

INSERT INTO `beandry` (`processId`, `processName`) VALUES
(1, '淺焙'),
(2, '淺中焙'),
(3, '中焙');

-- --------------------------------------------------------

--
-- 資料表結構 `country`
--

CREATE TABLE `country` (
  `countryId` int(11) NOT NULL,
  `countryName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `country`
--

INSERT INTO `country` (`countryId`, `countryName`) VALUES
(1, '台灣'),
(2, '印度'),
(3, '衣索比亞'),
(4, '肯亞'),
(5, '巴西'),
(6, '巴拿馬'),
(7, '哥倫比亞');

-- --------------------------------------------------------

--
-- 資料表結構 `flavor`
--

CREATE TABLE `flavor` (
  `flavorId` int(11) NOT NULL,
  `風味` varchar(20) DEFAULT NULL,
  `風味描述` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `flavor`
--

INSERT INTO `flavor` (`flavorId`, `風味`, `風味描述`) VALUES
(1, '花香', '花香、清亮的柑橘味，熟成的葡萄、檸檬果酸和蜜糖的甜感'),
(2, '莓果', '聞起來莓果香味，飲用時有麥香與榛果及巧克力氣息，放冷後有酒釀香氣'),
(3, '焦糖', '鮮明的果汁 焦糖風味，紮實又甜美'),
(4, '堅果', '整體風味是堅果味明顯，味道豐富多變，質感柔和，清新明亮的香氣，更有明顯的果香'),
(5, '巧克力可可', '聞起來有可可亞及核果香味，經由火山灰孕育，大自然成就的豆種'),
(6, '熱帶水果', '層次多變的花香與荔枝風味、濃郁迷人的草莓漿果和熱帶水果香氣');

-- --------------------------------------------------------

--
-- 資料表結構 `process`
--

CREATE TABLE `process` (
  `processId` int(11) NOT NULL,
  `processName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `process`
--

INSERT INTO `process` (`processId`, `processName`) VALUES
(1, '日曬處理'),
(2, '水洗處理法'),
(3, '密處理法');

-- --------------------------------------------------------

--
-- 資料表結構 `shopname`
--

CREATE TABLE `shopname` (
  `shopId` int(11) NOT NULL,
  `咖啡店名` varchar(20) DEFAULT NULL,
  `沖煮方式` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `shopname`
--

INSERT INTO `shopname` (`shopId`, `咖啡店名`, `沖煮方式`) VALUES
(1, '資深文青咖啡館', '手沖'),
(2, '手心溫度咖啡館', '手沖'),
(3, '日初咖啡', '手沖'),
(4, '落山風咖啡', '手沖'),
(5, '走走咖啡', '虹吸'),
(6, '豆豆咖啡', '虹吸'),
(7, '胖茶壺咖啡', '虹吸'),
(8, '丹。咖啡', '虹吸');

-- --------------------------------------------------------

--
-- 資料表結構 `國家清單`
--

CREATE TABLE `國家清單` (
  `cityId` int(11) NOT NULL,
  `國家名稱` varchar(20) DEFAULT NULL,
  `產地特色` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `國家清單`
--

INSERT INTO `國家清單` (`cityId`, `國家名稱`, `產地特色`) VALUES
(1, '台灣', '台灣處於亞熱帶氣候 ，非常適合咖啡之生長，採收烘焙後之咖啡豆，比進口還香醇，國外進口的咖啡略有苦澀的味道，而台灣咖啡豆，即使不放糖，喝起都有甘美的味道，香濃、韻、足。'),
(2, '印度', '印度已發展成各種乾濕式咖啡的出口大國。「季風處理」咖啡作法是把豆子存放在迎風面的開放式倉庫裡，接受潮濕的季風吹拂，豆子體積會因此膨脹一倍且呈現金黃色澤，特色是有股嗆鼻的霉味及煙燻味，酸度不高。'),
(3, '衣索比亞', '衣索比亞是阿拉比卡種的原產地，在咖啡界佔有特殊的一席之地。通常，以水洗法處理的衣索比亞咖啡口感潔淨，帶有花香；日曬豆則較厚重，風味豐富複雜，極具特色。'),
(4, '肯亞', '肯亞咖啡以酸度出名，在品質及業界作法方面亦享有良好聲譽。當地最出色的咖啡，風味多重繽紛，濃郁果香中透著莓果調性；口感深刻厚實，香氣十足，某些品種甚至還帶有甜味及酒香尾韻。'),
(5, '巴西', '巴西是世界上最大的咖啡生產國，不但有龐大的商業咖啡產量，亦有優質的高級單品咖啡。細緻的風味差異及平衡感，溫和、乾淨、酸度低的口感，有時還帶點牛奶巧克力、櫻桃及檫樹風味。'),
(6, '哥倫比亞', '哥倫比亞所生產的咖啡豆佔世界第二名約12%，但咖啡豆品質優良且多屬高海拔地區，香醇厚實、甘酸滑口、勁道足。有種奇特的地瓜皮風味，為咖啡中的佳品。常被用來增加其他咖啡的香味，很單品飲用。'),
(7, '巴拿馬', '巴拿馬近年來帶有濃郁花香的瑰夏（藝妓）咖啡備受矚目，巴拿馬在世界的咖啡地圖上揚起一股東山再起的氣勢。該國精品咖啡莊園在世界各地頗富盛名，所生產的咖啡明亮中帶有濃烈果香及花香調。');

-- --------------------------------------------------------

--
-- 資料表結構 `會員資料`
--

CREATE TABLE `會員資料` (
  `memberId` int(11) NOT NULL,
  `memberEmail` varchar(50) DEFAULT NULL,
  `memberPassword` varchar(20) DEFAULT NULL,
  `memberName` varchar(20) DEFAULT NULL,
  `memberPhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `會員資料`
--

INSERT INTO `會員資料` (`memberId`, `memberEmail`, `memberPassword`, `memberName`, `memberPhone`) VALUES
(1, 'abc@gmail.com', 'qazwsx', '潮男明', '0912345678'),
(15, 'qaz@yahoo.com.tw', '1qaz2wsx', '王大明', '0987456321');

-- --------------------------------------------------------

--
-- 資料表結構 `產品清單`
--

CREATE TABLE `產品清單` (
  `lisitId` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `國家名稱` varchar(20) DEFAULT NULL,
  `處理法` varchar(20) DEFAULT NULL,
  `焙度` varchar(20) DEFAULT NULL,
  `風味` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `產品清單`
--

INSERT INTO `產品清單` (`lisitId`, `shopId`, `國家名稱`, `處理法`, `焙度`, `風味`) VALUES
(1, 1, '台灣', '日曬', '淺焙', '花香'),
(2, 2, '台灣', '日曬', '淺中焙', '花香'),
(3, 3, '台灣', '日曬', '中焙', '花香'),
(4, 4, '台灣', '水洗', '淺焙', '熱帶水果'),
(5, 5, '台灣', '水洗', '淺中焙', '熱帶水果'),
(6, 6, '台灣', '水洗', '中焙', '熱帶水果'),
(7, 7, '台灣', '密處理	', '淺焙', '熱帶水果'),
(8, 8, '台灣', '密處理	', '淺中焙', '熱帶水果'),
(9, 1, '台灣', '密處理	', '中焙', '熱帶水果'),
(10, 2, '印度', '日曬', '淺焙', '堅果'),
(11, 3, '印度', '日曬', '淺中焙', '焦糖'),
(12, 4, '印度', '日曬', '中焙', '焦糖'),
(13, 5, '印度', '水洗', '淺焙', '莓果'),
(14, 6, '印度', '水洗', '淺中焙', '莓果'),
(15, 7, '印度', '水洗', '中焙', '莓果'),
(16, 8, '印度', '密處理', '淺焙', '熱帶水果'),
(17, 1, '印度', '密處理', '淺中焙', '熱帶水果'),
(18, 2, '印度', '密處理', '中焙', '熱帶水果'),
(19, 3, '衣索比亞', '日曬', '淺焙', '莓果'),
(20, 4, '衣索比亞', '日曬', '淺中焙', '花香'),
(21, 5, '衣索比亞', '日曬', '中焙', '花香'),
(22, 6, '衣索比亞', '水洗', '淺焙', '莓果'),
(23, 7, '衣索比亞', '水洗', '淺中焙', '莓果'),
(24, 8, '衣索比亞', '水洗', '中焙', '莓果'),
(25, 1, '衣索比亞', '密處理', '淺焙', '熱帶水果'),
(26, 2, '衣索比亞', '密處理', '淺中焙', '熱帶水果'),
(27, 3, '衣索比亞', '密處理', '中焙', '熱帶水果'),
(28, 4, '肯亞', '日曬', '淺焙', '莓果'),
(29, 5, '肯亞', '日曬', '淺中焙', '花香'),
(30, 6, '肯亞', '日曬', '中焙', '花香'),
(31, 7, '肯亞', '水洗', '淺焙', '莓果'),
(32, 8, '肯亞', '水洗', '淺中焙', '莓果'),
(33, 1, '肯亞', '水洗', '中焙', '莓果'),
(34, 2, '肯亞', '密處理', '淺焙', '熱帶水果'),
(35, 3, '肯亞', '密處理', '淺中焙', '熱帶水果'),
(36, 4, '肯亞', '密處理', '中焙', '熱帶水果'),
(37, 5, '巴西', '日曬', '淺焙', '堅果'),
(38, 6, '巴西', '日曬', '淺中焙', '堅果'),
(39, 7, '巴西', '日曬', '中焙', '堅果'),
(40, 8, '巴西', '水洗', '淺焙', '熱帶水果'),
(41, 1, '巴西', '水洗', '淺中焙', '熱帶水果'),
(42, 2, '巴西', '水洗', '中焙', '熱帶水果'),
(43, 3, '巴西', '密處理', '淺焙', '巧克力可可'),
(44, 4, '巴西', '密處理', '淺中焙', '巧克力可可'),
(45, 5, '巴西', '密處理', '中焙', '巧克力可可'),
(46, 6, '哥倫比亞', '日曬', '淺焙', '巧克力可可'),
(47, 7, '哥倫比亞', '日曬', '淺中焙', '巧克力可可'),
(48, 8, '哥倫比亞', '日曬', '中焙', '巧克力可可'),
(49, 1, '哥倫比亞', '水洗', '淺焙', '熱帶水果'),
(50, 2, '哥倫比亞', '水洗', '淺中焙', '熱帶水果'),
(51, 3, '哥倫比亞', '水洗', '中焙', '熱帶水果'),
(52, 4, '哥倫比亞', '密處理', '淺焙', '莓果'),
(53, 5, '哥倫比亞', '密處理', '淺中焙', '莓果'),
(54, 6, '哥倫比亞', '密處理', '中焙', '莓果'),
(55, 7, '巴拿馬', '日曬', '淺焙', '焦糖'),
(56, 8, '巴拿馬', '日曬', '淺中焙', '焦糖'),
(57, 1, '巴拿馬', '日曬', '中焙', '焦糖'),
(58, 2, '巴拿馬', '水洗', '淺焙', '莓果'),
(59, 3, '巴拿馬', '水洗', '淺中焙', '莓果'),
(60, 4, '巴拿馬', '水洗', '中焙', '莓果'),
(61, 5, '巴拿馬', '密處理', '淺焙', '熱帶水果'),
(62, 6, '巴拿馬', '密處理', '淺中焙', '熱帶水果'),
(63, 7, '巴拿馬', '密處理', '中焙', '熱帶水果');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `beandry`
--
ALTER TABLE `beandry`
  ADD PRIMARY KEY (`processId`);

--
-- 資料表索引 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryId`);

--
-- 資料表索引 `flavor`
--
ALTER TABLE `flavor`
  ADD PRIMARY KEY (`flavorId`);

--
-- 資料表索引 `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`processId`);

--
-- 資料表索引 `shopname`
--
ALTER TABLE `shopname`
  ADD PRIMARY KEY (`shopId`);

--
-- 資料表索引 `國家清單`
--
ALTER TABLE `國家清單`
  ADD PRIMARY KEY (`cityId`);

--
-- 資料表索引 `會員資料`
--
ALTER TABLE `會員資料`
  ADD PRIMARY KEY (`memberId`);

--
-- 資料表索引 `產品清單`
--
ALTER TABLE `產品清單`
  ADD PRIMARY KEY (`lisitId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `beandry`
--
ALTER TABLE `beandry`
  MODIFY `processId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `country`
--
ALTER TABLE `country`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `flavor`
--
ALTER TABLE `flavor`
  MODIFY `flavorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `process`
--
ALTER TABLE `process`
  MODIFY `processId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopname`
--
ALTER TABLE `shopname`
  MODIFY `shopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `國家清單`
--
ALTER TABLE `國家清單`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `會員資料`
--
ALTER TABLE `會員資料`
  MODIFY `memberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `產品清單`
--
ALTER TABLE `產品清單`
  MODIFY `lisitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
