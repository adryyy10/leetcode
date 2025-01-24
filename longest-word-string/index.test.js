const Solution = require('./index');

test('solve function works correctly', () => {
  const solution = new Solution();
  expect(solution.solve('The quick brown fox jumped over the lazy dog!')).toBe('jumped');
  expect(solution.solve('The quick brown fox jumped jampet over the lazy dog!')).toBe('jumped');
});
