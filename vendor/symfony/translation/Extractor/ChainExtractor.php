<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Extractor;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * ChainExtractor extracts translation messages from template files.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class ChainExtractor implements ExtractorInterface
{
    /**
     * The extractors.
     *
     * @var ExtractorInterface[]
     */
    private $extractors = [];

    /**
     * Adds a loader to the translation extractor.
     *
     * @return void
     */
    public function addExtractor(string $format, ExtractorInterface $extractor)
    {
        $this->extractors[$format] = $extractor;
    }

    /**
<<<<<<< Updated upstream
     * {@inheritdoc}
=======
     * @return void
>>>>>>> Stashed changes
     */
    public function setPrefix(string $prefix)
    {
        foreach ($this->extractors as $extractor) {
            $extractor->setPrefix($prefix);
        }
    }

    /**
<<<<<<< Updated upstream
     * {@inheritdoc}
     */
    public function extract($directory, MessageCatalogue $catalogue)
=======
     * @return void
     */
    public function extract(string|iterable $directory, MessageCatalogue $catalogue)
>>>>>>> Stashed changes
    {
        foreach ($this->extractors as $extractor) {
            $extractor->extract($directory, $catalogue);
        }
    }
}
