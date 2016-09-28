<?php

namespace HeoMic\Serializer;

use HeoMic\Serializer\Walker\WalkerInterface;
use HeoMic\Serializer\Walker\FlexWalker;

/**
 * @author Michał Hepner <michal.hepner@gmail.com>
 */
class JsonSerializer implements SerializerInterface
{
    /**
     * @param mixed           $contents
     * @param WalkerInterface $walker
     *
     * @return string
     */
    public function serialize(
        $contents,
        WalkerInterface $walker = null
    ) {
        $walker = $walker !== null ? $walker : new FlexWalker();

        $convertedContents = $walker->walk($contents);

        return json_encode($convertedContents);
    }
}
