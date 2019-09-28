<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property int $assignedTasks
 * @property bool $available
 * @property int $availableCapacityPercentage
 * @property int $configuredCapacity
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $sid
 * @property string $taskChannelSid
 * @property string $taskChannelUniqueName
 * @property string $workerSid
 * @property string $workspaceSid
 * @property string $url
 */
class WorkerChannelInstance extends InstanceResource {
    /**
     * Initialize the WorkerChannelInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The unique ID of the Workspace that this
     *                             WorkerChannel belongs to.
     * @param string $workerSid The unique ID of the Worker that this WorkerChannel
     *                          belongs to.
     * @param string $sid The sid
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Worker\WorkerChannelInstance
     */
    public function __construct(Version $version, array $payload, $workspaceSid, $workerSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'assignedTasks' => Values::array_get($payload, 'assigned_tasks'),
            'available' => Values::array_get($payload, 'available'),
            'availableCapacityPercentage' => Values::array_get($payload, 'available_capacity_percentage'),
            'configuredCapacity' => Values::array_get($payload, 'configured_capacity'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'sid' => Values::array_get($payload, 'sid'),
            'taskChannelSid' => Values::array_get($payload, 'task_channel_sid'),
            'taskChannelUniqueName' => Values::array_get($payload, 'task_channel_unique_name'),
            'workerSid' => Values::array_get($payload, 'worker_sid'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array(
            'workspaceSid' => $workspaceSid,
            'workerSid' => $workerSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Worker\WorkerChannelContext Context for this WorkerChannelInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new WorkerChannelContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['workerSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a WorkerChannelInstance
     *
     * @return WorkerChannelInstance Fetched WorkerChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WorkerChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkerChannelInstance Updated WorkerChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkerChannelInstance ' . implode(' ', $context) . ']';
    }
}