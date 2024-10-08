<?php

declare(strict_types=1);

namespace SmartpingApi\Enum;

enum LicenceType: string
{
    case COMPETITION = 'T';
    case LEISURE = 'P';
    case EVENT = 'E';
    case UNDEFINED = '';
    case EXECUTIVE = 'A';
    case DISCOVERY = 'I';
}
