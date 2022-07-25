<?php declare(strict_types=1);

namespace Minds\Monolog;

use Ramsey\Uuid\Uuid;

final class Uuid4Generator implements UidGeneratorInterface
{
    /**
     * @return string
     */
    public function generateUid(): string
    {
        return Uuid::uuid4()->toString();
    }
}