// Challenge ocurrences-count Solution
class Solution {
  solve(sentence) {
    sentence = sentence.toLowerCase()
    sentence = sentence.replace(" ", "")
    let sentenceAsArray = sentence.split('')
    let outputObject = {}

    sentenceAsArray.forEach(character => {
        if (character in outputObject) {
            outputObject[character] += 1
            return
        }

        outputObject[character] = 1
    });

    return outputObject
  }
}

module.exports = Solution;
