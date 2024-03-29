<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpFoundation\File\Exception\FileException) {
        // create a validator and validate to throw a new ValidationException
        return Validator::make($request->all(), [
            'your_file_input' => 'required|file|size:50000',
        ])->validate();
          }

        return parent::render($request, $exception);
       
       
       
        if ($exception instanceof ModelNotFoundException) {
            $exception = new NotFoundHttpException($exception->getMessage(), $exception);
        }

        if ($exception instanceof TokenMismatchException) {

            return redirect(route('login'))->withError('error_message', 'You page session expired. Please try to login again');
        }

        if($this->isHttpException($exception))
        {
            switch ($exception->getStatusCode()) 
                {
                // not found
                case 404:
                return redirect('/');
                break;

                // internal error
                case '500':
                return redirect('/');
                break;

                default:
                    return $this->renderHttpException($exception);
                break;
            }
        }
        else
        {
                return parent::render($request, $exception);
        }

        return parent::render($request, $exception);
		
		
		
		
		
		//return parent::render($request, $exception);
        // if($this->isHttpException($exception))
        // {
        //     switch ($exception->getStatusCode()) 
        //         {
        //         // not found
        //         case 404:
        //         return redirect('/');
        //         break;

        //         // internal error
        //         case '500':
        //         return redirect('/');
        //         break;

        //         default:
        //             return $this->renderHttpException($exception);
        //         break;
        //     }
        // }
        // else
        // {
        //         return parent::render($request, $e);
        // }
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
