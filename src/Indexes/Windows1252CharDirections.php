<?php

declare(strict_types=1);

namespace Hereldar\CharacterEncodings\Indexes;

use Hereldar\CharacterEncodings\Enums\Direction;

class Windows1252CharDirections
{
    public const INDEX = [
        "\x00" => Direction::BOUNDARY_NEUTRAL,
        "\x01" => Direction::BOUNDARY_NEUTRAL,
        "\x02" => Direction::BOUNDARY_NEUTRAL,
        "\x03" => Direction::BOUNDARY_NEUTRAL,
        "\x04" => Direction::BOUNDARY_NEUTRAL,
        "\x05" => Direction::BOUNDARY_NEUTRAL,
        "\x06" => Direction::BOUNDARY_NEUTRAL,
        "\x07" => Direction::BOUNDARY_NEUTRAL,
        "\x08" => Direction::BOUNDARY_NEUTRAL,
        "\x09" => Direction::SEGMENT_SEPARATOR,
        "\x0a" => Direction::PARAGRAPH_SEPARATOR,
        "\x0b" => Direction::SEGMENT_SEPARATOR,
        "\x0c" => Direction::WHITE_SPACE,
        "\x0d" => Direction::PARAGRAPH_SEPARATOR,
        "\x0e" => Direction::BOUNDARY_NEUTRAL,
        "\x0f" => Direction::BOUNDARY_NEUTRAL,
        "\x10" => Direction::BOUNDARY_NEUTRAL,
        "\x11" => Direction::BOUNDARY_NEUTRAL,
        "\x12" => Direction::BOUNDARY_NEUTRAL,
        "\x13" => Direction::BOUNDARY_NEUTRAL,
        "\x14" => Direction::BOUNDARY_NEUTRAL,
        "\x15" => Direction::BOUNDARY_NEUTRAL,
        "\x16" => Direction::BOUNDARY_NEUTRAL,
        "\x17" => Direction::BOUNDARY_NEUTRAL,
        "\x18" => Direction::BOUNDARY_NEUTRAL,
        "\x19" => Direction::BOUNDARY_NEUTRAL,
        "\x1a" => Direction::BOUNDARY_NEUTRAL,
        "\x1b" => Direction::BOUNDARY_NEUTRAL,
        "\x1c" => Direction::PARAGRAPH_SEPARATOR,
        "\x1d" => Direction::PARAGRAPH_SEPARATOR,
        "\x1e" => Direction::PARAGRAPH_SEPARATOR,
        "\x1f" => Direction::SEGMENT_SEPARATOR,
        "\x20" => Direction::WHITE_SPACE,
        "\x21" => Direction::OTHER_NEUTRAL,
        "\x22" => Direction::OTHER_NEUTRAL,
        "\x23" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\x24" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\x25" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\x26" => Direction::OTHER_NEUTRAL,
        "\x27" => Direction::OTHER_NEUTRAL,
        "\x28" => Direction::OTHER_NEUTRAL,
        "\x29" => Direction::OTHER_NEUTRAL,
        "\x2a" => Direction::OTHER_NEUTRAL,
        "\x2b" => Direction::EUROPEAN_NUMBER_SEPARATOR,
        "\x2c" => Direction::COMMON_NUMBER_SEPARATOR,
        "\x2d" => Direction::EUROPEAN_NUMBER_SEPARATOR,
        "\x2e" => Direction::COMMON_NUMBER_SEPARATOR,
        "\x2f" => Direction::COMMON_NUMBER_SEPARATOR,
        "\x30" => Direction::EUROPEAN_NUMBER,
        "\x31" => Direction::EUROPEAN_NUMBER,
        "\x32" => Direction::EUROPEAN_NUMBER,
        "\x33" => Direction::EUROPEAN_NUMBER,
        "\x34" => Direction::EUROPEAN_NUMBER,
        "\x35" => Direction::EUROPEAN_NUMBER,
        "\x36" => Direction::EUROPEAN_NUMBER,
        "\x37" => Direction::EUROPEAN_NUMBER,
        "\x38" => Direction::EUROPEAN_NUMBER,
        "\x39" => Direction::EUROPEAN_NUMBER,
        "\x3a" => Direction::COMMON_NUMBER_SEPARATOR,
        "\x3b" => Direction::OTHER_NEUTRAL,
        "\x3c" => Direction::OTHER_NEUTRAL,
        "\x3d" => Direction::OTHER_NEUTRAL,
        "\x3e" => Direction::OTHER_NEUTRAL,
        "\x3f" => Direction::OTHER_NEUTRAL,
        "\x40" => Direction::OTHER_NEUTRAL,
        "\x41" => Direction::LEFT_TO_RIGHT,
        "\x42" => Direction::LEFT_TO_RIGHT,
        "\x43" => Direction::LEFT_TO_RIGHT,
        "\x44" => Direction::LEFT_TO_RIGHT,
        "\x45" => Direction::LEFT_TO_RIGHT,
        "\x46" => Direction::LEFT_TO_RIGHT,
        "\x47" => Direction::LEFT_TO_RIGHT,
        "\x48" => Direction::LEFT_TO_RIGHT,
        "\x49" => Direction::LEFT_TO_RIGHT,
        "\x4a" => Direction::LEFT_TO_RIGHT,
        "\x4b" => Direction::LEFT_TO_RIGHT,
        "\x4c" => Direction::LEFT_TO_RIGHT,
        "\x4d" => Direction::LEFT_TO_RIGHT,
        "\x4e" => Direction::LEFT_TO_RIGHT,
        "\x4f" => Direction::LEFT_TO_RIGHT,
        "\x50" => Direction::LEFT_TO_RIGHT,
        "\x51" => Direction::LEFT_TO_RIGHT,
        "\x52" => Direction::LEFT_TO_RIGHT,
        "\x53" => Direction::LEFT_TO_RIGHT,
        "\x54" => Direction::LEFT_TO_RIGHT,
        "\x55" => Direction::LEFT_TO_RIGHT,
        "\x56" => Direction::LEFT_TO_RIGHT,
        "\x57" => Direction::LEFT_TO_RIGHT,
        "\x58" => Direction::LEFT_TO_RIGHT,
        "\x59" => Direction::LEFT_TO_RIGHT,
        "\x5a" => Direction::LEFT_TO_RIGHT,
        "\x5b" => Direction::OTHER_NEUTRAL,
        "\x5c" => Direction::OTHER_NEUTRAL,
        "\x5d" => Direction::OTHER_NEUTRAL,
        "\x5e" => Direction::OTHER_NEUTRAL,
        "\x5f" => Direction::OTHER_NEUTRAL,
        "\x60" => Direction::OTHER_NEUTRAL,
        "\x61" => Direction::LEFT_TO_RIGHT,
        "\x62" => Direction::LEFT_TO_RIGHT,
        "\x63" => Direction::LEFT_TO_RIGHT,
        "\x64" => Direction::LEFT_TO_RIGHT,
        "\x65" => Direction::LEFT_TO_RIGHT,
        "\x66" => Direction::LEFT_TO_RIGHT,
        "\x67" => Direction::LEFT_TO_RIGHT,
        "\x68" => Direction::LEFT_TO_RIGHT,
        "\x69" => Direction::LEFT_TO_RIGHT,
        "\x6a" => Direction::LEFT_TO_RIGHT,
        "\x6b" => Direction::LEFT_TO_RIGHT,
        "\x6c" => Direction::LEFT_TO_RIGHT,
        "\x6d" => Direction::LEFT_TO_RIGHT,
        "\x6e" => Direction::LEFT_TO_RIGHT,
        "\x6f" => Direction::LEFT_TO_RIGHT,
        "\x70" => Direction::LEFT_TO_RIGHT,
        "\x71" => Direction::LEFT_TO_RIGHT,
        "\x72" => Direction::LEFT_TO_RIGHT,
        "\x73" => Direction::LEFT_TO_RIGHT,
        "\x74" => Direction::LEFT_TO_RIGHT,
        "\x75" => Direction::LEFT_TO_RIGHT,
        "\x76" => Direction::LEFT_TO_RIGHT,
        "\x77" => Direction::LEFT_TO_RIGHT,
        "\x78" => Direction::LEFT_TO_RIGHT,
        "\x79" => Direction::LEFT_TO_RIGHT,
        "\x7a" => Direction::LEFT_TO_RIGHT,
        "\x7b" => Direction::OTHER_NEUTRAL,
        "\x7c" => Direction::OTHER_NEUTRAL,
        "\x7d" => Direction::OTHER_NEUTRAL,
        "\x7e" => Direction::OTHER_NEUTRAL,
        "\x7f" => Direction::BOUNDARY_NEUTRAL,
        "\x80" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\x82" => Direction::OTHER_NEUTRAL,
        "\x83" => Direction::LEFT_TO_RIGHT,
        "\x84" => Direction::OTHER_NEUTRAL,
        "\x85" => Direction::OTHER_NEUTRAL,
        "\x86" => Direction::OTHER_NEUTRAL,
        "\x87" => Direction::OTHER_NEUTRAL,
        "\x88" => Direction::OTHER_NEUTRAL,
        "\x89" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\x8a" => Direction::LEFT_TO_RIGHT,
        "\x8b" => Direction::OTHER_NEUTRAL,
        "\x8c" => Direction::LEFT_TO_RIGHT,
        "\x8e" => Direction::LEFT_TO_RIGHT,
        "\x91" => Direction::OTHER_NEUTRAL,
        "\x92" => Direction::OTHER_NEUTRAL,
        "\x93" => Direction::OTHER_NEUTRAL,
        "\x94" => Direction::OTHER_NEUTRAL,
        "\x95" => Direction::OTHER_NEUTRAL,
        "\x96" => Direction::OTHER_NEUTRAL,
        "\x97" => Direction::OTHER_NEUTRAL,
        "\x98" => Direction::OTHER_NEUTRAL,
        "\x99" => Direction::OTHER_NEUTRAL,
        "\x9a" => Direction::LEFT_TO_RIGHT,
        "\x9b" => Direction::OTHER_NEUTRAL,
        "\x9c" => Direction::LEFT_TO_RIGHT,
        "\x9d" => Direction::BOUNDARY_NEUTRAL,
        "\x9e" => Direction::LEFT_TO_RIGHT,
        "\x9f" => Direction::LEFT_TO_RIGHT,
        "\xa0" => Direction::COMMON_NUMBER_SEPARATOR,
        "\xa1" => Direction::OTHER_NEUTRAL,
        "\xa2" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xa3" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xa4" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xa5" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xa6" => Direction::OTHER_NEUTRAL,
        "\xa7" => Direction::OTHER_NEUTRAL,
        "\xa8" => Direction::OTHER_NEUTRAL,
        "\xa9" => Direction::OTHER_NEUTRAL,
        "\xaa" => Direction::LEFT_TO_RIGHT,
        "\xab" => Direction::OTHER_NEUTRAL,
        "\xac" => Direction::OTHER_NEUTRAL,
        "\xad" => Direction::BOUNDARY_NEUTRAL,
        "\xae" => Direction::OTHER_NEUTRAL,
        "\xaf" => Direction::OTHER_NEUTRAL,
        "\xb0" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xb1" => Direction::EUROPEAN_NUMBER_TERMINATOR,
        "\xb2" => Direction::EUROPEAN_NUMBER,
        "\xb3" => Direction::EUROPEAN_NUMBER,
        "\xb4" => Direction::OTHER_NEUTRAL,
        "\xb5" => Direction::LEFT_TO_RIGHT,
        "\xb6" => Direction::OTHER_NEUTRAL,
        "\xb7" => Direction::OTHER_NEUTRAL,
        "\xb8" => Direction::OTHER_NEUTRAL,
        "\xb9" => Direction::EUROPEAN_NUMBER,
        "\xba" => Direction::LEFT_TO_RIGHT,
        "\xbb" => Direction::OTHER_NEUTRAL,
        "\xbc" => Direction::OTHER_NEUTRAL,
        "\xbd" => Direction::OTHER_NEUTRAL,
        "\xbe" => Direction::OTHER_NEUTRAL,
        "\xbf" => Direction::OTHER_NEUTRAL,
        "\xc0" => Direction::LEFT_TO_RIGHT,
        "\xc1" => Direction::LEFT_TO_RIGHT,
        "\xc2" => Direction::LEFT_TO_RIGHT,
        "\xc3" => Direction::LEFT_TO_RIGHT,
        "\xc4" => Direction::LEFT_TO_RIGHT,
        "\xc5" => Direction::LEFT_TO_RIGHT,
        "\xc6" => Direction::LEFT_TO_RIGHT,
        "\xc7" => Direction::LEFT_TO_RIGHT,
        "\xc8" => Direction::LEFT_TO_RIGHT,
        "\xc9" => Direction::LEFT_TO_RIGHT,
        "\xca" => Direction::LEFT_TO_RIGHT,
        "\xcb" => Direction::LEFT_TO_RIGHT,
        "\xcc" => Direction::LEFT_TO_RIGHT,
        "\xcd" => Direction::LEFT_TO_RIGHT,
        "\xce" => Direction::LEFT_TO_RIGHT,
        "\xcf" => Direction::LEFT_TO_RIGHT,
        "\xd0" => Direction::LEFT_TO_RIGHT,
        "\xd1" => Direction::LEFT_TO_RIGHT,
        "\xd2" => Direction::LEFT_TO_RIGHT,
        "\xd3" => Direction::LEFT_TO_RIGHT,
        "\xd4" => Direction::LEFT_TO_RIGHT,
        "\xd5" => Direction::LEFT_TO_RIGHT,
        "\xd6" => Direction::LEFT_TO_RIGHT,
        "\xd7" => Direction::OTHER_NEUTRAL,
        "\xd8" => Direction::LEFT_TO_RIGHT,
        "\xd9" => Direction::LEFT_TO_RIGHT,
        "\xda" => Direction::LEFT_TO_RIGHT,
        "\xdb" => Direction::LEFT_TO_RIGHT,
        "\xdc" => Direction::LEFT_TO_RIGHT,
        "\xdd" => Direction::LEFT_TO_RIGHT,
        "\xde" => Direction::LEFT_TO_RIGHT,
        "\xdf" => Direction::LEFT_TO_RIGHT,
        "\xe0" => Direction::LEFT_TO_RIGHT,
        "\xe1" => Direction::LEFT_TO_RIGHT,
        "\xe2" => Direction::LEFT_TO_RIGHT,
        "\xe3" => Direction::LEFT_TO_RIGHT,
        "\xe4" => Direction::LEFT_TO_RIGHT,
        "\xe5" => Direction::LEFT_TO_RIGHT,
        "\xe6" => Direction::LEFT_TO_RIGHT,
        "\xe7" => Direction::LEFT_TO_RIGHT,
        "\xe8" => Direction::LEFT_TO_RIGHT,
        "\xe9" => Direction::LEFT_TO_RIGHT,
        "\xea" => Direction::LEFT_TO_RIGHT,
        "\xeb" => Direction::LEFT_TO_RIGHT,
        "\xec" => Direction::LEFT_TO_RIGHT,
        "\xed" => Direction::LEFT_TO_RIGHT,
        "\xee" => Direction::LEFT_TO_RIGHT,
        "\xef" => Direction::LEFT_TO_RIGHT,
        "\xf0" => Direction::LEFT_TO_RIGHT,
        "\xf1" => Direction::LEFT_TO_RIGHT,
        "\xf2" => Direction::LEFT_TO_RIGHT,
        "\xf3" => Direction::LEFT_TO_RIGHT,
        "\xf4" => Direction::LEFT_TO_RIGHT,
        "\xf5" => Direction::LEFT_TO_RIGHT,
        "\xf6" => Direction::LEFT_TO_RIGHT,
        "\xf7" => Direction::OTHER_NEUTRAL,
        "\xf8" => Direction::LEFT_TO_RIGHT,
        "\xf9" => Direction::LEFT_TO_RIGHT,
        "\xfa" => Direction::LEFT_TO_RIGHT,
        "\xfb" => Direction::LEFT_TO_RIGHT,
        "\xfc" => Direction::LEFT_TO_RIGHT,
        "\xfd" => Direction::LEFT_TO_RIGHT,
        "\xfe" => Direction::LEFT_TO_RIGHT,
        "\xff" => Direction::LEFT_TO_RIGHT,
    ];
}
