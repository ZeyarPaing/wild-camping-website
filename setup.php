<?php
$connection = mysqli_connect("localhost", "root", "");
if (mysqli_connect_error()) {
    die(mysqli_connect_error());
}
// Create database
$query = "CREATE DATABASE IF NOT EXISTS gwsc; USE gwsc;";

// Tables creation
// Table for site information including visitor count
$query .= "CREATE TABLE IF NOT EXISTS gwsc_info(
    visitor_count INT NOT NULL PRIMARY KEY DEFAULT 0,
  );";


$query .= "CREATE TABLE IF NOT EXISTS admin(
    adminid INT(5) PRIMARY KEY, 
    adminname VARCHAR(30) NOT NULL, 
    email CHAR(50) NOT NULL UNIQUE, 
    password CHAR(150) NOT NULL, 
    address VARCHAR(100) NOT NULL, 
    phoneno VARCHAR(30) NOT NULL
    );";

$query .= "CREATE TABLE IF NOT EXISTS user(
    userid INT(5) AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL, 
    email CHAR(50) NOT NULL UNIQUE, 
    password CHAR(150) NOT NULL, 
    dateofbirth DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address VARCHAR(100) NOT NULL,
    phoneno VARCHAR(30) NOT NULL
    );";

$query .= "CREATE TABLE IF NOT EXISTS pitch (
    pitchid INT(5) AUTO_INCREMENT PRIMARY KEY,
    pitchname VARCHAR(200) NOT NULL,
    availability INT(1) NOT NULL,
    description TEXT
  );";


$query .= "CREATE TABLE IF NOT EXISTS feature (
    featureid INT(5) AUTO_INCREMENT PRIMARY KEY,
    featurename VARCHAR(200) NOT NULL,
    description TEXT
  );";



$query .= "CREATE TABLE IF NOT EXISTS local_attraction (
    localid INT(5) AUTO_INCREMENT PRIMARY KEY,
    localname VARCHAR(200) NOT NULL,
    location VARCHAR(200) NOT NULL,
    description TEXT
  );";

$query .= "CREATE TABLE IF NOT EXISTS camping_site (
    campsiteid INT(5) AUTO_INCREMENT PRIMARY KEY,
    sitename VARCHAR(200) NOT NULL,
    location VARCHAR(200) NOT NULL,
    description TEXT NOT NULL,
    pitchid INT(5) NOT NULL,
    price VARCHAR(50) NOT NULL,
    rating DECIMAL(3, 1) NOT NULL,
    maplink TEXT NOT NULL,
    FOREIGN KEY (pitchid) REFERENCES pitch(pitchid)
  );";

$query .= "CREATE TABLE IF NOT EXISTS review(
    reviewid INT(5) AUTO_INCREMENT PRIMARY KEY,
    userid INT(5) NOT NULL,
    rating FLOAT NOT NULL,
    review TEXT NOT NULL,
    campsiteid INT(5),
    FOREIGN KEY (userid) REFERENCES user(userid),
    FOREIGN KEY (campsiteid) REFERENCES camping_site(campsiteid)
);";

$query .= "CREATE TABLE IF NOT EXISTS contact(
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL
  );";


$query .= "INSERT INTO gwsc_info VALUES (0);";

// Insert data

// Admin
$query .= "INSERT INTO admin VALUES (1, 'admin', 'admin@gwsc.com', '" . password_hash("admin", PASSWORD_DEFAULT) . "', 'UK', '44(0)20-1234-5678');";

// Customers
$query .= "INSERT INTO user (username, email, password, dateofbirth, gender, address, phoneno) VALUES
('Sarah Johnson', 'sarah.johnson@example.com', '" . password_hash('sarah.johnson', PASSWORD_DEFAULT) . "', '1992-09-22', 'Female', '789 Elm St, Lakeside USA', '555-9876'),
('John Doe', 'john.doe@example.com', '" . password_hash('john.doe', PASSWORD_DEFAULT) . "', '1985-06-15', 'Male', '456 Oak St, Springfield USA', '555-5678'),
('Michael Brown', 'michael.brown@example.com', '" . password_hash('michael.brown', PASSWORD_DEFAULT) . "', '1988-03-10', 'Male', '987 Maple St, Forestville USA', '555-5432'),
('Emily Wilson', 'emily.wilson@example.com', '" . password_hash('emily.wilson', PASSWORD_DEFAULT) . "', '1995-11-30', 'Female', '567 Pine St, Sunnyvale USA', '555-6789'),
('David Thompson', 'david.thompson@example.com', '" . password_hash('david.thompson', PASSWORD_DEFAULT) . "', '1982-07-25', 'Male', '234 Birch St, Oakville USA', '555-4321'),
('Sophia Lee', 'sophia.lee@example.com', '" . password_hash('sophia.lee', PASSWORD_DEFAULT) . "', '1998-01-18', 'Female', '789 Cedar St, Mountain View USA', '555-8765'),
('William Garcia', 'william.garcia@example.com', '" . password_hash('william.garcia', PASSWORD_DEFAULT) . "', '1991-04-03', 'Male', '345 Redwood St, Cupertino USA', '555-6543'),
('Olivia Martinez', 'olivia.martinez@example.com', '" . password_hash('olivia.martinez', PASSWORD_DEFAULT) . "', '1987-12-20', 'Female', '678 Oakwood St, Los Gatos USA', '555-3456'),
('James Adams', 'james.adams@example.com', '" . password_hash('james.adams', PASSWORD_DEFAULT) . "', '1984-08-12', 'Male', '123 Cedarwood St, Palo Alto USA', '555-7890'),
('Emma Anderson', 'emma.anderson@example.com', '" . password_hash('emma.anderson', PASSWORD_DEFAULT) . "', '1996-02-28', 'Female', '456 Maplewood St, Menlo Park USA', '555-2109'),
('Daniel Wilson', 'daniel.wilson@example.com', '" . password_hash('daniel.wilson', PASSWORD_DEFAULT) . "', '1989-10-07', 'Male', '789 Pinecrest St, Santa Clara USA', '555-7654'),
('Ava Jackson', 'ava.jackson@example.com', '" . password_hash('ava.jackson', PASSWORD_DEFAULT) . "', '1993-05-17', 'Female', '567 Oakcrest St, Campbell USA', '555-4321'),
('Alexander Hernandez', 'alexander.hernandez@example.com', '" . password_hash('alexander.hernandez', PASSWORD_DEFAULT) . "', '1986-09-09', 'Male', '234 Redwood St, Milpitas USA', '555-8765'),
('Sophia Adams', 'sophia.adams@example.com', '" . password_hash('sophia.adams', PASSWORD_DEFAULT) . "', '1997-11-23', 'Female', '789 Cedarwood St, Sunnyvale USA', '555-9876'),
('Jacob Davis', 'jacob.davis@example.com', '" . password_hash('jacob.davis', PASSWORD_DEFAULT) . "', '1983-04-12', 'Male', '345 Birch St, Cupertino USA', '555-5678'),
('Isabella Johnson', 'isabella.johnson@example.com', '" . password_hash('isabella.johnson', PASSWORD_DEFAULT) . "', '1994-12-05', 'Female', '678 Maplewood St, Mountain View USA', '555-6543'),
('Ethan Thompson', 'ethan.thompson@example.com', '" . password_hash('ethan.thompson', PASSWORD_DEFAULT) . "', '1981-08-29', 'Male', '123 Redwood St, Los Gatos, USA', '555-5432');";

//pitch
$query .= "INSERT INTO pitch ( pitchname, availability, description) VALUES 
('Tent', 1, 'A tent is a shelter consisting of sheets of fabric or other material draped over, attached to a frame of poles or attached to a supporting rope. '),
('Caravan', 1, 'A caravan, travel trailer, camper or camper trailer is towed behind a road vehicle to provide a place to sleep which is more comfortable and protected than a tent (although there are fold-down trailer tents).'),
('Motorhome', 1, 'A motorhome is a type of self-propelled recreational vehicle) which offers living accommodation combined with a vehicle engine.'),
('Cabin', 0, 'A cabin or berthing is an enclosed space generally on a ship or an aircraft. A cabin which protrudes above the level of a ships deck may be referred to as a deckhouse.');";
// feature
$query .= "INSERT INTO feature ( featurename, description) VALUES 
('Electricity', 'Whether you need to charge your phone, run a fan, or power a hotplate, electricity at your campsite can provide a level of convenience and comfort that can make your stay more enjoyable.'),
('Water', 'Water sources may be provided through taps, wells, or nearby rivers or streams, and having this feature available on every campsite can save you the hassle of having to bring your own water supply or travel long distances to find water.'),
('Toilet', 'Having a toilet on site can make camping much more comfortable and convenient, especially for longer stays or for families with young children. It can also help reduce the impact of human waste on the surrounding environment.'),
('Laundry', 'Laundry facilities may include coin-operated washing machines and dryers or basic washing basins and clotheslines for air-drying. Having access to laundry facilities can also help reduce the amount of clothing campers need to bring with them, making packing and traveling easier.'),
('Shower', 'Having access to a shower can make a huge difference in the overall camping experience, allowing campers to feel refreshed and rejuvenated after a long day of hiking, swimming, or other outdoor activities.'),
('Wifi', 'Stay connected during your outdoor adventure with our campsite complimentary wifi. Check your email, catch up on work, or share your favorite moments on social media, all from the comfort of your campsite.')
;";
//local_attraction
$query .= "INSERT INTO local_attraction ( localname, location, description) VALUES 
('Beach', 'Bournemouth', 'Bournemouth is a seaside resort on the southern coast of England. It is part of the ceremonial county of Dorset, 96 miles (154 km) southwest of London and 19 miles (31 km) west of the county town of Dorchester. '),
('Cinema', 'Poole', 'Poole is a large coastal town and seaport in Dorset, on the south coast of England. The town is 33 kilometres (21 mi) east of Dorchester, and adjoins Bournemouth to the east. '),
('Restaurant', 'Bournemouth', 'Bournemouth is a seaside resort on the southern coast of England. It is part of the ceremonial county of Dorset, 96 miles (154 km) southwest of London and 19 miles (31 km) west of the county town of Dorchester.'),
('Pub', 'Poole', 'Poole is a large coastal town and seaport in Dorset, on the south coast of England. The town is 33 kilometres (21 mi) east of Dorchester, and adjoins Bournemouth to the east. ')
;";

// // Campsites
$query .= "INSERT INTO camping_site (sitename, pitchid, location, description, price, rating, maplink) VALUES 
('Yosemite National Park Campground', 2, 'California, United States', 'Located in the iconic Yosemite National Park in California, this campsite offers breathtaking views of granite cliffs, waterfalls, and ancient sequoia trees. With hiking, rock climbing, and wildlife watching opportunities, this campsite is a mecca for outdoor enthusiasts seeking natural beauty and adventure.', 'USD $26 per night', 4.8, 'https://www.google.com/maps?q=Yosemite+National+Park+Campground+California+United+States'),
('Lake District National Park Campsite', 3, 'Cumbria, United Kingdom', 'Nestled in the picturesque Lake District National Park in the United Kingdom, this campsite offers stunning views of lakes, fells, and valleys. With hiking, boating, and fishing opportunities, this campsite is a haven for nature lovers and outdoor adventurers.', 'GBP £15 per night', 4.7, 'https://www.google.com/maps?q=Lake+District+National+Park+Campsite+Cumbria+United+Kingdom'),
('Jasper National Park Campground', 2, 'Alberta, Canada', 'Surrounded by rugged mountains, pristine lakes, and glaciers, Jasper National Park Campground offers a spectacular camping experience in the Canadian Rockies. With opportunities for hiking, wildlife watching, and stargazing, this campsite is a paradise for nature enthusiasts.', 'CAD $30 per night', 4.6, 'https://www.google.com/maps?q=Jasper+National+Park+Campground+Alberta+Canada'),
('Blue Lagoon Campground', 1, 'Reykjavik, Iceland', 'Immerse yourself in the geothermal wonders of Iceland with a camping experience at the Blue Lagoon Campground. Located near Reykjavik, this campsite offers unique opportunities for wild swimming in the famous Blue Lagoon, a geothermal spa renowned for its mineral-rich, milky blue waters. With its otherworldly landscapes, geothermal hot springs, and stunning natural beauty, this campsite offers a truly unforgettable experience.', 'ISK 5,000 per night', 4.9, 'https://www.google.com/maps?q=Blue+Lagoon+Campground+Reykjavik+Iceland'),
('Namib-Naukluft National Park Campsite', 4, 'Erongo Region, Namibia', 'Located in the heart of the Namib Desert in Namibia, this campsite offers a unique camping experience in one of the oldest deserts in the world. With breathtaking sand dunes, stark landscapes, and stargazing opportunities, this campsite is a must-visit for desert adventurers.', 'NAD $200 per night', 4.5, 'https://www.google.com/maps?q=Namib-Naukluft+National+Park+Campsite+Erongo+Region+Namibia'),
('Zion National Park Campground', 2, 'Utah, United States', 'Nestled in the dramatic red rock canyons of Zion National Park in Utah, this campsite offers stunning vistas, challenging hikes, and unique geological formations. With opportunities for hiking, canyoneering, and stargazing, this campsite is a haven for outdoor enthusiasts seeking adventure and natural beauty.', 'USD $20 per night', 4.7, 'https://www.google.com/maps?q=Zion+National+Park+Campground+Utah+United+States'),
('Plitvice Lakes National Park Campsite', 1, 'Lika-Senj County, Croatia', 'Located in the breathtaking Plitvice Lakes National Park in Croatia, this campsite offers stunning natural beauty and opportunities for wild swimming in turquoise lakes and waterfalls. With its cascading waterfalls, lush forests, and vibrant turquoise lakes, this campsite is a true paradise for nature lovers and avid swimmers alike.', 'HRK 150 per night', 4.7, 'https://www.google.com/maps?q=Plitvice+Lakes+National+Park+Campsite+Lika-Senj+County+Croatia'),
('Banff National Park Campground', 2, 'Alberta, Canada', 'Nestled in the majestic Rocky Mountains of Canada, Banff National Park Campground offers stunning alpine scenery, pristine lakes, and abundant wildlife. With opportunities for hiking, camping, and wildlife viewing, this campsite is a paradise for outdoor enthusiasts.', 'CAD $35 per night', 4.9, 'https://www.google.com/maps?q=Banff+National+Park+Campground+Alberta+Canada'),
('Lake District Wild Swimming Campsite', 3, 'Cumbria, England', 'Located in the picturesque Lake District National Park in Cumbria, England, this campsite offers stunning lake views and opportunities for refreshing wild swimming adventures. With numerous lakes and tarns to choose from, outdoor enthusiasts can enjoy swimming in natural, unspoiled waters surrounded by beautiful landscapes.', 'GBP £25 per night', 4.7, 'https://www.google.com/maps?q=Lake+District+Wild+Swimming+Campsite+Cumbria+England'),
('Amazon Rainforest Campsite', 1, 'Amazon Rainforest, Brazil', 'Immerse yourself in the worlds largest rainforest with a camping adventure in the Amazon Rainforest in Brazil. Explore the dense jungle, spot exotic wildlife, and learn about indigenous cultures. With opportunities for trekking, river cruises, and wildlife observation, this campsite offers a unique and adventurous experience.', 'BRL R$80 per night', 4.5, 'https://www.google.com/maps?q=Amazon+Rainforest+Campsite+Brazil'),
('Serengeti National Park Campsite', 2, 'Tanzania', 'Embark on an unforgettable safari adventure with a camping trip in the Serengeti National Park in Tanzania. Witness the Great Migration, spot the Big Five, and experience the African savannah at its finest. With opportunities for game drives, guided walks, and cultural experiences, this campsite offers an unparalleled wildlife experience.', 'USD $100 per night', 4.8, 'https://www.google.com/maps?q=Serengeti+National+Park+Campsite+Tanzania'),
('Great Ocean Road Campsite', 3, 'Victoria, Australia', 'Located along the stunning Great Ocean Road in Victoria, Australia, this campsite offers breathtaking coastal scenery, pristine beaches, and iconic rock formations such as the Twelve Apostles. With opportunities for beachcombing, surfing, and scenic drives, this campsite is a haven for nature lovers and road trip enthusiasts.', 'AUD $25 per night', 4.6, 'https://www.google.com/maps?q=Great+Ocean+Road+Campsite+Victoria+Australia'),
('Plitvice Lakes National Park Campsite', 2, 'Lika-Senj County, Croatia', 'Nestled in the lush forests of Plitvice Lakes National Park in Croatia, this campsite offers a magical experience with its turquoise lakes, cascading waterfalls, and pristine natural beauty. With opportunities for hiking, boating, and wildlife spotting, this campsite is a UNESCO World Heritage Site that promises a truly unique camping adventure.', 'HRK 200 per night', 4.7, 'https://www.google.com/maps?q=Plitvice+Lakes+National+Park+Campsite+Lika-Senj+County+Croatia'),
('Lake Tahoe Campground', 2, 'California, United States', 'Nestled in the beautiful Sierra Nevada Mountains of California, Lake Tahoe Campground offers stunning lake views, pristine beaches, and opportunities for thrilling wild swimming adventures. With crystal-clear waters, sandy beaches, and breathtaking mountain scenery, this campsite is a perfect destination for water lovers and outdoor enthusiasts.', 'USD $35 per night', 4.8, 'https://www.google.com/maps?q=Lake+Tahoe+Campground+California+United+States'),
('Maasai Mara National Reserve Campsite', 1, 'Narok County, Kenya', 'Immerse yourself in the African wilderness with a camping adventure in the Maasai Mara National Reserve in Kenya. Witness the annual wildebeest migration, spot lions, elephants, and other wildlife, and experience Maasai culture. With opportunities for game drives, hot air balloon safaris, and cultural encounters, this campsite offers an authentic African safari experience.', 'KES 5,000 per night', 4.9, 'https://www.google.com/maps?q=Maasai+Mara+National+Reserve+Campsite+Narok+County+Kenya'),
('Fiordland National Park Campsite', 3,  'Southland, New Zealand', 'Located in the remote wilderness of Fiordland National Park in New Zealand, this campsite offers unparalleled natural beauty with its rugged fiords, dense forests, and dramatic waterfalls. With opportunities for hiking, boating, and wildlife spotting, this campsite promises an unforgettable camping experience in a pristine wilderness setting.', 'NZD $20 per night', 4.8, 'https://www.google.com/maps?q=Fiordland+National+Park+Campsite+Southland+New+Zealand'),
('Barron Gorge National Park Campsite', 4, 'Queensland, Australia', 'Nestled in the lush rainforests of Queensland, Australia, Barron Gorge National Park Campsite offers opportunities for wild swimming adventures in pristine rivers and waterfalls. With its crystal-clear waters, natural rock pools, and lush tropical surroundings, this campsite is a perfect destination for nature lovers and adventure seekers.', 'AUD $30 per night', 4.6, 'https://www.google.com/maps?q=Barron+Gorge+National+Park+Campsite+Queensland+Australia'),
('Kruger National Park Campsite', 3, 'Mpumalanga, South Africa', 'Embark on a thrilling camping adventure in Kruger National Park, one of Africa premier wildlife reserves, located in South Africa. With opportunities for game drives, bush walks, and wildlife photography, this campsite offers an immersive experience in the African wilderness, with a chance to spot the Big Five and other iconic African wildlife.', 'ZAR 500 per night', 4.7, 'https://www.google.com/maps?q=Kruger+National+Park+Campsite+Mpumalanga+South+Africa'),
('Denali National Park Campground', 4, 'Alaska, United States', 'Nestled in the rugged wilderness of Alaska, Denali National Park Campground offers awe-inspiring views of North Americas tallest peak, Denali. With opportunities for wildlife viewing, hiking, and camping in the wilderness of Alaska, this campsite is a dream destination for adventurers and nature lovers.', 'USD $25 per night', 4.9, 'https://www.google.com/maps?q=Denali+National+Park+Campground+Alaska+United+States');
";

// // Reviews
$query .= "INSERT INTO review (userid, campsiteid, rating, review ) VALUES 
(1, 1, 4.5, 'Great campsite with beautiful views of Yosemite Valley. The facilities were clean and well-maintained. The hiking trails were amazing and we saw some wildlife too.'),
(1, 2, 5.0, 'Absolutely loved this campsite! The location is stunning and the staff were friendly and helpful. The campground was well-organized and had all the amenities we needed. Will definitely be coming back.'),
(2, 3, 3.5, 'The campsite was decent, but the facilities could have been better. The bathrooms were not very clean and the showers were not working properly. However, the location was convenient for exploring the nearby trails.'),
(2, 4, 4.0, 'We had a good time at this campsite. The location was beautiful and there were plenty of hiking trails nearby. The campsites were spacious and the fire pits were a nice addition. The only downside was the lack of showers.'),
(3, 5, 4.5, 'This campsite was amazing! The scenery was breathtaking and the campsite was well-maintained. The staff were friendly and the facilities were clean. We enjoyed hiking and fishing in the nearby lake.'),
(3, 6, 5.0, 'One of the best camping experiences I have had! The campsite was well-equipped with picnic tables, fire rings, and clean bathrooms. The hiking trails were challenging but rewarding, and the views were simply stunning.'),
(4, 7, 3.0, 'The campsite was average. The location was convenient, but the facilities were not well-maintained. The bathrooms were dirty and the showers were cold. There were also some issues with noise from other campers.'),
(4, 8, 4.0, 'Overall, a decent campsite with good access to hiking trails. The campsites were clean and well-spaced, and the fire rings were a nice touch. The facilities were basic but functional.'),
(5, 9, 4.5, 'We had a great time at this campsite. The location was beautiful and the facilities were well-maintained. The staff were friendly and helpful. The hiking trails were challenging but rewarding.'),
(5, 10, 5.0, 'Absolutely loved this campsite! The views were breathtaking and the facilities were clean and well-maintained. The campground was quiet and peaceful, and the staff were friendly and accommodating.'),
(6, 11, 3.5, 'The campsite was decent, but the facilities were outdated and could use some improvements. The bathrooms were not very clean and the showers were not reliable. However, the location was convenient for exploring the nearby attractions.'),
(6, 12, 4.0, 'The campsite had beautiful views and was well-maintained. The staff were friendly and helpful. The facilities were clean but basic. The hiking trails were challenging but rewarding.'),
(7, 13, 4.5, 'This campsite was amazing! The location was stunning and the facilities were clean and well-maintained. The staff were friendly and knowledgeable. We enjoyed hiking and stargazing in the clear night sky.'),
(7, 14, 5.0, 'One of the best camping experiences I have had! The campsite was well-organized with spacious sites and fire pits. The facilities were clean and well-stocked. The hiking trails were breathtaking.');
";


$status = mysqli_multi_query($connection, $query);
if ($status) {
    echo "Data preparation successful ✅";
} else {
    echo "Data preparation failed ❗️";
    die();
}
mysqli_close($connection);
