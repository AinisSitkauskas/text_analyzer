<?php

use App\Service\SentenceCalculator;
use PHPUnit\Framework\TestCase;

class SentenceCalculatorTest extends TestCase
{
    private SentenceCalculator $sentenceCalculator;

    public function setUp(): void
    {
        $this->sentenceCalculator = new SentenceCalculator();
    }

    /**
     * @dataProvider sentencesProvider
     * @param array $sentences
     * @param array $result
     */
    public function testCalculateSentences(array $sentences, array $result)
    {
        $this->assertSame($result, $this->sentenceCalculator->calculateSentences($sentences));
    }

    public function sentencesProvider(): array
    {
        return [
            [
                [
                    'Aenean posuere pulvinar luctus.',
                    'In hac habitasse platea dictumst.',
                    'Vivamus sagittis, nibh eu rutrum volutpat, eros ipsum efficitur justo, molestie accumsan lectus orci in nisl.',
                    'Vestibulum sed mi consequat, suscipit libero ut, porta sapien.',
                    'Sed ac ligula rhoncus, aliquam neque sed, elementum dui.',
                    'Quisque in libero eget dolor interdum eleifend vel egestas massa.',
                    'Sed tempor ante lectus, in gravida massa tincidunt eu.',
                    'Ut tristique elit quis consequat aliquam.',
                    'Fusce pharetra rhoncus leo, a ornare leo auctor nec.',
                    'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                    'Quisque semper, risus blandit commodo mollis, diam purus tincidunt eros, id elementum sapien felis a elit.',
                    'Cras non nisi egestas, commodo lacus at, finibus orci.',
                ],
                [
                    'longestSentenceCount' => 16,
                    'longestSentences' => [
                        'Vivamus sagittis, nibh eu rutrum volutpat, eros ipsum efficitur justo, molestie accumsan lectus orci in nisl.',
                        'Quisque semper, risus blandit commodo mollis, diam purus tincidunt eros, id elementum sapien felis a elit.',
                    ],
                    'shortestSentenceCount' => 4,
                    'shortestSentences' => [
                        'Aenean posuere pulvinar luctus.'
                    ]
                ]
            ]
        ];
    }
}
