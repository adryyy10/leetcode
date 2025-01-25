const Solution = require('./index');

test('solve function works correctly', () => {
  const solution = new Solution();
  expect(solution.solve('programming')).toBe('progamin');
});
