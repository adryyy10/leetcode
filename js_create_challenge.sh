#!/bin/bash

# Check if a directory name is provided as input
if [ -z "$1" ]; then
  echo "Please provide a folder name."
  exit 1
fi

# Create the challenge directory
mkdir "$1"
cd "$1" || exit

# Initialize a new Node.js project (if not already initialized)
if [ ! -f "package.json" ]; then
  npm init -y
  npm install --save-dev jest
  
  # Add Jest configuration to package.json
  npm set-script test "jest"
fi

# Create the README.md file
echo "# Challenge $1" > README.md
echo "## Problem description:" >> README.md
echo "Explain the challenge here." >> README.md
echo "## Solution:" >> README.md
echo "Explain your solution here." >> README.md

# Create the index.js file with a basic template
echo "// Challenge $1 Solution" > index.js
echo "class Solution {" >> index.js
echo "  solve() {" >> index.js
echo "    // Write your solution here" >> index.js
echo "  }" >> index.js
echo "}" >> index.js
echo "" >> index.js
echo "module.exports = Solution;" >> index.js

# Create the Jest test file (index.test.js)
echo "const Solution = require('./index');" > index.test.js
echo "" >> index.test.js
echo "test('solve function works correctly', () => {" >> index.test.js
echo "  const solution = new Solution();" >> index.test.js
echo "  expect(solution.solve()).toBe('expectedResult');" >> index.test.js
echo "});" >> index.test.js

# Create .gitignore
echo "/node_modules/" > .gitignore

echo "Challenge $1 created successfully with Jest integration!"
