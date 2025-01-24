class Solution {
  solve(str) {
    // Remove punctuations from phrase
    str = str.replace(/[^\w\s\']|_/g, "").replace(/\s+/g, " ");

    // Use reduce to find the longest word
    return str.split(" ").reduce((longest, current) => current.length > longest.length ? current : longest, "");
  }
}

module.exports = Solution;
