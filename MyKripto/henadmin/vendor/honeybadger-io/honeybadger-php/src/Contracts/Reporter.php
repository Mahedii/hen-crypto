<?php

namespace Honeybadger\Contracts;

use Symfony\Component\HttpFoundation\Request as FoundationRequest;
use Throwable;

interface Reporter
{
    /**
     * @param  \Throwable  $throwable
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  array  $additionalParams
     * @return array
     *
     * @throws \Honeybadger\Exceptions\ServiceException
     */
    public function notify(Throwable $throwable, FoundationRequest $request = null, array $additionalParams = []): array;

    /**
     * @param  array  $payload
     * @return array
     *
     * @throws \Honeybadger\Exceptions\ServiceException
     */
    public function customNotification(array $payload): array;

    /**
     * @param  callable  $callable
     * @return array
     *
     * @throws \Honeybadger\Exceptions\ServiceException
     * @throws \InvalidArgumentException
     */
    public function rawNotification(callable $callable): array;

    /**
     * @param  string  $key
     * @return void
     *
     * @throws \Honeybadger\Exceptions\ServiceException
     */
    public function checkin(string $key): void;

    /**
     * Attach some additional context to an error report. Context can be specified as a $key and $value, or as an array with key-value pairs.
     *
     * @param  int|string|array  $key
     * @param  mixed  $value
     * @return self
     */
    public function context($key, $value = null);

    /**
     * Add a breadcrumb item.
     *
     * Breadcrumbs are records of events that happen within your app.
     * A breadcrumb might be anything, such as a database query, log entry or external API call.
     * Breadcrumbs can be useful when debugging, as they help you understand what events led up to an error.
     * Our framework integrations will automatically add some breadcrumbs, but you can add yours manually with this method.
     *
     * @param string $message A brief description of the event represented by this breadcrumb, for example "Email Sent".
     * @param array $metadata A map of contextual data about the event. This must be a simple key-value array at one level (no nesting allowed).
     * @param string $category A key for grouping related events. You can use anything here, but we recommend following the list at https://docs.honeybadger.io/lib/php/guides/breadcrumbs.html#categories.
     *
     * @return $this
     */
    public function addBreadcrumb(string $message, array $metadata = [], string $category = 'custom'): self;

    /**
     * Clear all breadcrumbs and context.
     */
    public function clear(): self;
}
