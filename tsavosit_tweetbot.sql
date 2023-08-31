-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2023 at 05:03 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsavosit_tweetbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_shop`
--

CREATE TABLE `api_shop` (
  `id` int(11) NOT NULL,
  `app_id` varchar(100) NOT NULL,
  `like_charge` varchar(100) NOT NULL,
  `follow_charge` varchar(100) NOT NULL,
  `tweet_charge` varchar(100) NOT NULL,
  `max_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appgini_query_log`
--

CREATE TABLE `appgini_query_log` (
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `statement` longtext DEFAULT NULL,
  `duration` decimal(10,2) UNSIGNED DEFAULT 0.00,
  `error` text DEFAULT NULL,
  `memberID` varchar(200) DEFAULT NULL,
  `uri` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `automation_scripts`
--

CREATE TABLE `automation_scripts` (
  `id` int(11) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `file_path` varchar(1000) NOT NULL,
  `execution` varchar(1000) NOT NULL,
  `automation` int(200) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `automation_subs`
--

CREATE TABLE `automation_subs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `script_id` varchar(100) NOT NULL,
  `status` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_dm`
--

CREATE TABLE `auto_dm` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone_number` varchar(1000) NOT NULL,
  `tx_ref` varchar(1000) NOT NULL,
  `charged_amount` varchar(1000) NOT NULL,
  `payment_type` varchar(1000) NOT NULL,
  `created_at` varchar(1000) NOT NULL,
  `auth_model` varchar(1000) NOT NULL,
  `device_fingerprint` varchar(1000) NOT NULL,
  `flw_ref` varchar(1000) NOT NULL,
  `account_id` varchar(1000) NOT NULL,
  `amount_settled` varchar(1000) NOT NULL,
  `app_fee` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bot_control`
--

CREATE TABLE `bot_control` (
  `id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `deep_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_engine`
--

CREATE TABLE `campaign_engine` (
  `id` int(11) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `campaign` varchar(1000) NOT NULL,
  `last_key` varchar(1000) NOT NULL,
  `pagination_token` varchar(1000) NOT NULL,
  `budget` varchar(1000) NOT NULL,
  `spent_budget` varchar(1000) NOT NULL,
  `execution` varchar(1000) NOT NULL,
  `frequency` varchar(1000) NOT NULL,
  `status` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_api`
--

CREATE TABLE `client_api` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `consumer_key` varchar(2000) NOT NULL,
  `consumer_secret` varchar(2000) NOT NULL,
  `bearer_token` varchar(5000) NOT NULL,
  `access_token` varchar(1000) NOT NULL,
  `access_secret` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 is inactive & 1 is active',
  `level` int(11) NOT NULL DEFAULT 0 COMMENT '0 is owner & 1 is subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `engine_monitor`
--

CREATE TABLE `engine_monitor` (
  `id` int(11) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `command` varchar(200) NOT NULL,
  `count` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hist_id` int(11) NOT NULL,
  `id` int(100) NOT NULL COMMENT 'The ID of the user.',
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(1000) NOT NULL DEFAULT 'Kenya',
  `contact_info` varchar(100) NOT NULL,
  `contact_verify` int(200) NOT NULL DEFAULT 0,
  `photo` varchar(200) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` varchar(1000) DEFAULT NULL,
  `source` varchar(1000) NOT NULL,
  `verified` varchar(1000) NOT NULL,
  `occupation` varchar(1000) NOT NULL DEFAULT 'Investor',
  `company` varchar(1000) NOT NULL,
  `company_site` varchar(1000) NOT NULL,
  `language` varchar(1000) NOT NULL,
  `time_zone` varchar(1000) NOT NULL,
  `currency` varchar(1000) NOT NULL,
  `email_comm` int(200) NOT NULL,
  `phone_comm` int(200) NOT NULL,
  `marketing` int(200) NOT NULL,
  `two_auth` int(200) NOT NULL DEFAULT 0,
  `two_auth_secret` blob NOT NULL,
  `g_id` varchar(1000) NOT NULL,
  `f_id` varchar(1000) NOT NULL,
  `t_id` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `change_part` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `status_info` text NOT NULL,
  `device` varchar(1000) NOT NULL,
  `browser` varchar(1000) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `source_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `dm` int(11) NOT NULL,
  `joined` int(11) NOT NULL,
  `followed` int(11) NOT NULL,
  `token` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(100) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(100) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(100) NOT NULL,
  `passMD5` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL,
  `flags` text DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0,
  `data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_usersessions`
--

CREATE TABLE `membership_usersessions` (
  `memberID` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `expiry_ts` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `process_engine`
--

CREATE TABLE `process_engine` (
  `id` int(11) NOT NULL,
  `request_method` varchar(100) NOT NULL,
  `page` varchar(1000) NOT NULL,
  `var_1` varchar(100) NOT NULL,
  `object` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `access_token` varchar(1000) NOT NULL,
  `access_secret` varchar(1000) NOT NULL,
  `execution` varchar(100) NOT NULL,
  `user_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pts_conversion`
--

CREATE TABLE `pts_conversion` (
  `id` int(40) NOT NULL,
  `user_id` int(40) NOT NULL,
  `points` int(11) NOT NULL,
  `time` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_cookies`
--

CREATE TABLE `system_cookies` (
  `id` int(11) NOT NULL,
  `PATH` varchar(200) NOT NULL,
  `HTTP_ACCEPT` varchar(200) NOT NULL,
  `HTTP_ACCEPT_ENCODING` varchar(200) NOT NULL,
  `HTTP_ACCEPT_LANGUAGE` varchar(200) NOT NULL,
  `HTTP_COOKIE` varchar(200) NOT NULL,
  `HTTP_HOST` varchar(200) NOT NULL,
  `HTTP_USER_AGENT` varchar(200) NOT NULL,
  `HTTP_CACHE_CONTROL` varchar(200) NOT NULL,
  `HTTP_SEC_CH_UA` varchar(200) NOT NULL,
  `HTTP_SEC_CH_UA_MOBILE` varchar(200) NOT NULL,
  `HTTP_SEC_CH_UA_PLATFORM` varchar(200) NOT NULL,
  `HTTP_UPGRADE_INSECURE_REQUESTS` varchar(200) NOT NULL,
  `HTTP_SEC_FETCH_SITE` varchar(200) NOT NULL,
  `HTTP_SEC_FETCH_MODE` varchar(200) NOT NULL,
  `HTTP_SEC_FETCH_USER` varchar(200) NOT NULL,
  `HTTP_SEC_FETCH_DEST` varchar(200) NOT NULL,
  `HTTP_X_HTTPS` varchar(200) NOT NULL,
  `DOCUMENT_ROOT` varchar(200) NOT NULL,
  `REMOTE_ADDR` varchar(200) NOT NULL,
  `REMOTE_PORT` varchar(200) NOT NULL,
  `SERVER_ADDR` varchar(200) NOT NULL,
  `SERVER_NAME` varchar(200) NOT NULL,
  `SERVER_ADMIN` varchar(200) NOT NULL,
  `SERVER_PORT` varchar(200) NOT NULL,
  `REQUEST_SCHEME` varchar(200) NOT NULL,
  `REQUEST_URI` varchar(200) NOT NULL,
  `GEOIP_ADDR` varchar(200) NOT NULL,
  `GEOIP_CONTINENT_CODE` varchar(200) NOT NULL,
  `GEOIP_COUNTRY_CODE` varchar(200) NOT NULL,
  `GEOIP_COUNTRY_NAME` varchar(200) NOT NULL,
  `GEOIP_CITY` varchar(200) NOT NULL,
  `GEOIP_CITY_CONTINENT_CODE` varchar(200) NOT NULL,
  `GEOIP_CITY_COUNTRY_CODE` varchar(200) NOT NULL,
  `GEOIP_CITY_COUNTRY_NAME` varchar(200) NOT NULL,
  `GEOIP_REGION` varchar(200) NOT NULL,
  `GEOIP_LATITUDE` varchar(200) NOT NULL,
  `GEOIP_LONGITUDE` varchar(200) NOT NULL,
  `GEOIP_ISP` varchar(200) NOT NULL,
  `GEOIP_ORGANIZATION` varchar(200) NOT NULL,
  `GEOIP_POSTAL_CODE` varchar(200) NOT NULL,
  `GEOIP_DMA_CODE` varchar(200) NOT NULL,
  `HTTPS` varchar(200) NOT NULL,
  `CRAWLER_USLEEP` varchar(200) NOT NULL,
  `CRAWLER_LOAD_LIMIT_ENFORCE` varchar(200) NOT NULL,
  `X_SPDY` varchar(200) NOT NULL,
  `SSL_PROTOCOL` varchar(200) NOT NULL,
  `SSL_CIPHER` varchar(200) NOT NULL,
  `SSL_CIPHER_USEKEYSIZE` varchar(200) NOT NULL,
  `SSL_CIPHER_ALGKEYSIZE` varchar(200) NOT NULL,
  `SCRIPT_FILENAME` varchar(200) NOT NULL,
  `QUERY_STRING` varchar(200) NOT NULL,
  `SCRIPT_URI` varchar(200) NOT NULL,
  `SCRIPT_URL` varchar(200) NOT NULL,
  `SCRIPT_NAME` varchar(200) NOT NULL,
  `SERVER_PROTOCOL` varchar(200) NOT NULL,
  `SERVER_SOFTWARE` varchar(200) NOT NULL,
  `REQUEST_METHOD` varchar(200) NOT NULL,
  `X-LSCACHE` varchar(200) NOT NULL,
  `PHP_SELF` varchar(200) NOT NULL,
  `REQUEST_TIME_FLOAT` varchar(200) NOT NULL,
  `REQUEST_TIME` varchar(200) NOT NULL,
  `HTTP_REFERER` varchar(200) NOT NULL,
  `REDIRECT_URL` varchar(200) NOT NULL,
  `REDIRECT_REQUEST_METHOD` varchar(200) NOT NULL,
  `REDIRECT_STATUS` varchar(200) NOT NULL,
  `REDIRECT_QUERY_STRING` varchar(200) NOT NULL,
  `HTTP_CONNECTION` varchar(200) NOT NULL,
  `CONTENT_TYPE` varchar(200) NOT NULL,
  `CONTENT_LENGTH` varchar(200) NOT NULL,
  `UNIQUE_ID` varchar(200) NOT NULL,
  `SSL_SESSION_ID` varchar(200) NOT NULL,
  `HTTP_X_REQUESTED_WITH` varchar(200) NOT NULL,
  `HTTP_ORIGIN` varchar(200) NOT NULL,
  `MIBDIRS` varchar(40) NOT NULL,
  `MYSQL_HOME` varchar(40) NOT NULL,
  `OPENSSL_CONF` varchar(40) NOT NULL,
  `PHP_PEAR_SYSCONF_DIR` varchar(40) NOT NULL,
  `PHPRC` varchar(65) NOT NULL,
  `TMP` varchar(40) NOT NULL,
  `SSL_TLS_SNI` varchar(40) NOT NULL,
  `SSL_SERVER_S_DN_CN` varchar(40) NOT NULL,
  `SSL_SERVER_I_DN_CN` varchar(40) NOT NULL,
  `SSL_VERSION_INTERFACE` varchar(40) NOT NULL,
  `SSL_VERSION_LIBRARY` varchar(40) NOT NULL,
  `SSL_SECURE_RENEG` varchar(40) NOT NULL,
  `HTTP_ACCEPT_CHARSET` text DEFAULT NULL,
  `HTTP_X_FORWARDED_FOR` text DEFAULT NULL,
  `PROXY_REMOTE_ADDR` text DEFAULT NULL,
  `-LSCACHE` varchar(200) NOT NULL,
  `LSPHP_ENABLE_USER_INI` text DEFAULT NULL,
  `TEMP` text DEFAULT NULL,
  `TMPDIR` text DEFAULT NULL,
  `PWD` text DEFAULT NULL,
  `QS_ConnectionId` text DEFAULT NULL,
  `HTTP2` text DEFAULT NULL,
  `H2PUSH` text DEFAULT NULL,
  `H2_PUSH` text DEFAULT NULL,
  `H2_PUSHED` text DEFAULT NULL,
  `H2_PUSHED_ON` text DEFAULT NULL,
  `H2_STREAM_ID` text DEFAULT NULL,
  `H2_STREAM_TAG` text DEFAULT NULL,
  `SERVER_SIGNATURE` text DEFAULT NULL,
  `CONTEXT_PREFIX` text DEFAULT NULL,
  `CONTEXT_DOCUMENT_ROOT` text DEFAULT NULL,
  `argv` text DEFAULT NULL,
  `argc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_tokens`
--

CREATE TABLE `system_tokens` (
  `id` int(11) NOT NULL,
  `bearer_token` varchar(1000) NOT NULL,
  `consumer_key` varchar(1000) NOT NULL,
  `consumer_secret` varchar(1000) NOT NULL,
  `api` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `id` int(11) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tweet_factory`
--

CREATE TABLE `tweet_factory` (
  `id` int(11) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `file_path` varchar(1000) NOT NULL,
  `execution` varchar(1000) NOT NULL,
  `automation` int(200) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `status` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `twitter_logs`
--

CREATE TABLE `twitter_logs` (
  `id` int(11) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `status_info` text NOT NULL,
  `device` varchar(1000) NOT NULL,
  `browser` varchar(1000) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `source_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usage_track`
--

CREATE TABLE `usage_track` (
  `id` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `points` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `consumer_key` varchar(1000) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(1000) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `contact_verify` int(200) NOT NULL DEFAULT 0,
  `photo` varchar(200) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` varchar(1000) DEFAULT NULL,
  `source` varchar(1000) NOT NULL,
  `verified` varchar(1000) NOT NULL,
  `occupation` varchar(1000) NOT NULL DEFAULT 'Twitter user',
  `company` varchar(1000) NOT NULL,
  `company_site` varchar(1000) NOT NULL,
  `language` varchar(1000) NOT NULL,
  `time_zone` varchar(1000) NOT NULL,
  `currency` varchar(1000) NOT NULL,
  `email_comm` int(200) NOT NULL,
  `phone_comm` int(200) NOT NULL,
  `marketing` int(200) NOT NULL,
  `two_auth` int(200) NOT NULL DEFAULT 0,
  `two_auth_secret` blob NOT NULL,
  `g_id` varchar(1000) NOT NULL,
  `f_id` varchar(1000) NOT NULL,
  `t_id` varchar(1000) NOT NULL,
  `access_token` varchar(1000) NOT NULL,
  `access_secret` varchar(1000) NOT NULL,
  `p_value` varchar(10000) NOT NULL,
  `p_key` blob NOT NULL,
  `p_cipher` varchar(100) NOT NULL DEFAULT '0',
  `referer_code` varchar(200) NOT NULL,
  `referer_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_earnings`
--

CREATE TABLE `user_earnings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `app` varchar(200) NOT NULL DEFAULT '0',
  `refer` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_shop`
--
ALTER TABLE `api_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automation_scripts`
--
ALTER TABLE `automation_scripts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automation_subs`
--
ALTER TABLE `automation_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_dm`
--
ALTER TABLE `auto_dm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`(768));

--
-- Indexes for table `bot_control`
--
ALTER TABLE `bot_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_engine`
--
ALTER TABLE `campaign_engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_api`
--
ALTER TABLE `client_api`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`(768));

--
-- Indexes for table `engine_monitor`
--
ALTER TABLE `engine_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hist_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `groupID_tableName` (`groupID`,`tableName`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `memberID_tableName` (`memberID`,`tableName`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`(100)),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_usersessions`
--
ALTER TABLE `membership_usersessions`
  ADD UNIQUE KEY `memberID_token_agent` (`memberID`,`token`(50),`agent`(50)),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `expiry_ts` (`expiry_ts`);

--
-- Indexes for table `process_engine`
--
ALTER TABLE `process_engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pts_conversion`
--
ALTER TABLE `pts_conversion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_cookies`
--
ALTER TABLE `system_cookies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_tokens`
--
ALTER TABLE `system_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweet_factory`
--
ALTER TABLE `tweet_factory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter_logs`
--
ALTER TABLE `twitter_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usage_track`
--
ALTER TABLE `usage_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_earnings`
--
ALTER TABLE `user_earnings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_shop`
--
ALTER TABLE `api_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `automation_scripts`
--
ALTER TABLE `automation_scripts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `automation_subs`
--
ALTER TABLE `automation_subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auto_dm`
--
ALTER TABLE `auto_dm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bot_control`
--
ALTER TABLE `bot_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_engine`
--
ALTER TABLE `campaign_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_api`
--
ALTER TABLE `client_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engine_monitor`
--
ALTER TABLE `engine_monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `process_engine`
--
ALTER TABLE `process_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pts_conversion`
--
ALTER TABLE `pts_conversion`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_cookies`
--
ALTER TABLE `system_cookies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_tokens`
--
ALTER TABLE `system_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tweet_factory`
--
ALTER TABLE `tweet_factory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `twitter_logs`
--
ALTER TABLE `twitter_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usage_track`
--
ALTER TABLE `usage_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_earnings`
--
ALTER TABLE `user_earnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
