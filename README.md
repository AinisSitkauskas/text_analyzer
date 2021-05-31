# Text analyzer - Ainis Šitkauskas

Following steps to run this program:
- Install all necessary dependencies with `composer install`;
- Put your text files in `files/` directory;
- Program works from terminal with `php index.php [fileName]`, ex. `php index.php input.txt`;
- Result is calculated logest and shortest sentences, if are two or more longest/shortest sentences - all results are printed;
- To run test pass `./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/`;

# Examples

Example using `input.txt` (all test files are in `files/` directory)

```
php index.php input.txt
Longest: 24 Sentence: Morbi eget posuere urna, sed tincidunt laoreet magna, duis sollicitudin, ligula id vehicula dignissim, massa dolor imperdiet mauris, sed tempus felis ex ut orci.
Shortest: 4 Sentence: Sed nec dictum est.
```

Example using `input2.txt`

```
php index.php input2.txt
Longest: 16 Sentence: Vivamus fringilla, lorem a laoreet vehicula, tortor odio ornare orci, vitae blandit felis mauris vel sapien.
Longest: 16 Sentence: Nulla ultrices, neque id porttitor pharetra, lorem libero porttitor ligula, non aliquet risus ligula vel tellus.
Longest: 16 Sentence: Curabitur lacinia, elit eu porttitor finibus, lorem sem aliquet ex, eget efficitur dui lorem vitae nibh.
Longest: 16 Sentence: Etiam hendrerit, elit vel dictum scelerisque, nulla mi porttitor massa, cursus rutrum felis velit quis est.
Longest: 16 Sentence: Etiam condimentum, ex eu vehicula consectetur, ex lectus efficitur orci, et rutrum arcu lorem non arcu.
Shortest: 2 Sentence: Nulla facilisi.
```
