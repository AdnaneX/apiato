<?php

namespace App\Services\Configuration\Exceptions;

use App\Modules\Core\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * Class WrongConfigurationsException
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class WrongConfigurationsException extends Exception
{

    public $httpStatusCode = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;

    public $message = 'Ops! Some Modules configurations (config/modules.php) are wrong!';
}
