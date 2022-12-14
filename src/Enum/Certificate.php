<?php

declare(strict_types=1);

namespace SmartpingApi\Enum;

enum Certificate: string
{
    case PROVIDED = 'A';
    case OK = 'C';
    case PROVIDED_MINOR = 'U';
    case NO_TRAINING = 'N';
    case QUADRUPLE = 'Q';
    case UNDEFINED = '';
}
