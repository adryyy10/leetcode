#!/bin/bash

# Check if a directory name is provided as input
if [ -z "$1" ]; then
  echo "Please provide a folder name."
  exit 1
fi

# Create the challenge directory
mkdir "$1"
cd "$1" || exit

# Initialize a new Composer project (if not already initialized)
if [ ! -f "composer.json" ]; then
  composer init --name="challenge/$1" --description="PHP Challenge $1" --require="phpunit/phpunit:^9" --no-interaction
  composer install
fi

# Create the README.md file
echo "# Challenge $1" > README.md
echo "## Problem description:" >> README.md
echo "Explain the challenge here." >> README.md
echo "## Solution:" >> README.md
echo "Explain your solution here." >> README.md

# Create the index.php file with a basic template
echo "<?php" > index.php
echo "// Challenge $1 Solution" >> index.php
echo "class Solution {" >> index.php
echo "function solve() {" >> index.php
echo "    // Write your solution here" >> index.php
echo "}" >> index.php
echo "}" >> index.php
echo "?>" >> index.php

# Create the PHPUnit test file (indexTest.php)
echo "<?php" > indexTest.php
echo "use PHPUnit\\Framework\\TestCase;" >> indexTest.php
echo "require './index.php';" >> indexTest.php
echo "" >> indexTest.php
echo "class ChallengeTest extends TestCase" >> indexTest.php
echo "{" >> indexTest.php
echo "    public function testSolve()" >> indexTest.php
echo "    {" >> indexTest.php
echo "        // Write your test cases here" >> indexTest.php
echo "        \$solution = new Solution;" >> indexTest.php
echo "        \$this->assertEquals('expectedResult', \$solution->solve());" >> indexTest.php
echo "    }" >> indexTest.php
echo "}" >> indexTest.php
echo "?>" >> indexTest.php

# Create the phpunit.xml file for PHPUnit configuration
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" > phpunit.xml
echo "<phpunit bootstrap=\"vendor/autoload.php\">" >> phpunit.xml
echo "    <testsuites>" >> phpunit.xml
echo "        <testsuite name=\"Challenge $1\">" >> phpunit.xml
echo "            <directory>./</directory>" >> phpunit.xml
echo "        </testsuite>" >> phpunit.xml
echo "    </testsuites>" >> phpunit.xml
echo "</phpunit>" >> phpunit.xml

# Create .gitignore
echo "/vendor/" > .gitignore

echo "Challenge $1 created successfully with PHPUnit integration!"

