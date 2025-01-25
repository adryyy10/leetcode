// Challenge remove-duplicates-string Solution
class Solution {
  solve(word) {
    let wordAsArray = word.split('');
    let uniqueCharacters = [];
    wordAsArray.forEach((character) => {
      if (!uniqueCharacters.includes(character)) {
        uniqueCharacters.push(character);
      }
    });

    return uniqueCharacters.join('');
  }
}

module.exports = Solution;
