<?php

use App\Service\TextSplitter;
use PHPUnit\Framework\TestCase;

class TextSplitterTest extends TestCase
{
    private TextSplitter $textSplitter;

    public function setUp(): void
    {
        $this->textSplitter = new TextSplitter();
    }

    /**
     * @dataProvider textProvider
     * @param string $text
     * @param array $result
     */
    public function testSplitBySentence(string $text, array $result)
    {
        $this->assertSame($result, $this->textSplitter->splitBySentence($text));
    }

    public function textProvider(): array
    {
        return [
            ['Lorem ipsum dolor sit amet, consectetur adipiscing elit...
             Vivamus fringilla, lorem a laoreet vehicula, tortor odio ornare orci ? Vitae blandit felis mauris vel sapien. Phasellus nec vehicula ante, eu dapibus orci.
             Integer vel metus justo! Lorem ipsum dolor sit amet, consectetur adipiscing elit; Suspendisse ac leo elementum, bibendum dolor nec, fermentum diam.
             Maecenas rutrum leo est, vitae dictum velit volutpat sit amet.. Fusce efficitur tellus ac ipsum fringilla sagittis!.',

                [
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                    'Vivamus fringilla, lorem a laoreet vehicula, tortor odio ornare orci ?',
                    'Vitae blandit felis mauris vel sapien.',
                    'Phasellus nec vehicula ante, eu dapibus orci.',
                    'Integer vel metus justo!',
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit;',
                    'Suspendisse ac leo elementum, bibendum dolor nec, fermentum diam.',
                    'Maecenas rutrum leo est, vitae dictum velit volutpat sit amet..',
                    'Fusce efficitur tellus ac ipsum fringilla sagittis!.',
                ]
            ],
        ];
    }
}
