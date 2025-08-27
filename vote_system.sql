
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','voter') NOT NULL DEFAULT 'voter',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Elections
CREATE TABLE elections (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(160) NOT NULL,
  description TEXT,
  start_at DATETIME NOT NULL,
  end_at DATETIME NOT NULL,
  status ENUM('draft','live','ended') NOT NULL DEFAULT 'draft',
  created_by INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (created_by) REFERENCES users(id)
);

-- Positions
CREATE TABLE positions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  election_id INT NOT NULL,
  name VARCHAR(120) NOT NULL,
  seats INT NOT NULL DEFAULT 1,
  FOREIGN KEY (election_id) REFERENCES elections(id)
);

-- Candidates
CREATE TABLE candidates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  election_id INT NOT NULL,
  position_id INT NOT NULL,
  full_name VARCHAR(120) NOT NULL,
  FOREIGN KEY (election_id) REFERENCES elections(id),
  FOREIGN KEY (position_id) REFERENCES positions(id)
);

-- Voters Assigned to Election
CREATE TABLE election_voters (
  id INT AUTO_INCREMENT PRIMARY KEY,
  election_id INT NOT NULL,
  user_id INT NOT NULL,
  has_voted TINYINT(1) DEFAULT 0,
  FOREIGN KEY (election_id) REFERENCES elections(id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  UNIQUE KEY unique_voter (election_id, user_id)
);

-- Ballots (to prevent multiple votes per election)
CREATE TABLE ballots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  election_id INT NOT NULL,
  user_id INT NOT NULL,
  cast_at DATETIME DEFAULT NULL,
  status ENUM('pending','cast') DEFAULT 'pending',
  FOREIGN KEY (election_id) REFERENCES elections(id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  UNIQUE KEY unique_ballot (election_id, user_id)
);

-- Votes
CREATE TABLE votes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ballot_id INT NOT NULL,
  position_id INT NOT NULL,
  candidate_id INT NOT NULL,
  FOREIGN KEY (ballot_id) REFERENCES ballots(id),
  FOREIGN KEY (position_id) REFERENCES positions(id),
  FOREIGN KEY (candidate_id) REFERENCES candidates(id),
  UNIQUE KEY unique_vote (ballot_id, position_id)
);
