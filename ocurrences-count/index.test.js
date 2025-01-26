const Solution = require('./index');

test('solve function works correctly', () => {
  const solution = new Solution();
  expect(solution.solve('Hello world')).toStrictEqual({ h: 1, e: 1, l: 3, o: 2, w: 1, r: 1, d: 1 });
});
