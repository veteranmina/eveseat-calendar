<?php

return [

    'plugin_name' => 'Calendar',

    'settings'   => 'Settings',
    'operations' => 'Operations',

    'all_operations'       => 'All operations',
    'incoming_operations'  => 'Incoming',
    'cancelled_operations' => 'Cancelled',
    'ongoing_operations'   => 'Ongoing',
    'faded_operations'     => 'Faded',

    'add_operation'    => 'Create a new operation',
    'update_operation' => 'Update',
    'known_duration'   => 'Duration is known',

    'close'                        => 'Close',
    'close_confirm_notice'         => 'Are you sure you want to close this operation ? Closing an operation will set its ending time as now, thus not showing in the "Ongoing" section anymore.',
    'close_confirm_button_no'      => 'No, do not close this operation',
    'close_confirm_button_yes'     => 'Yes, I want to close this operation',
    'confirm'                      => 'Confirm',
    'delete'                       => 'Delete',
    'delete_confirm_notice'        => 'Are you really sure you want to delete this operation ? This action is irreversible.',
    'delete_confirm_button_no'     => 'No, do not delete this operation',
    'delete_confirm_button_yes'    => 'Yes, I am sure I want to delete this operation',
    'update'                       => 'Update',
    'cancel'                       => 'Cancel',
    'cancelled'                    => 'Cancelled',
    'cancel_confirm_notice'        => 'Are you sure you want to cancel this operation ? A cancelled operation will be shown in the "Faded" section. You will be able to reactivate a cancelled operation.',
    'cancel_confirm_button_no'     => 'No, do not cancel this operation',
    'cancel_confirm_button_yes'    => 'Yes, I want to cancel this operation',
    'other'                        => 'Other',
    'activate'                     => 'Activate',
    'activate_confirm_notice'      => 'Are you sure you want to activate this operation ? This operation will not be tagged as "cancelled" anymore.',
    'activate_confirm_button_no'   => 'No, do not activate this operation',
    'activate_confirm_button_yes'  => 'Yes, I want to activate this operation',
    'details'                      => 'Details',
    'time'                         => 'Time',
    'yes'                          => 'Yes',
    'no'                           => 'No',
    'actions'                      => 'Actions',
    'attending_yes'                => 'Attending',
    'attending_no'                 => 'Not attending',
    'attending_maybe'              => 'Maybe attending',
    'create_confirm_button_yes'    => 'Create this operation',
    'update_confirm_button_yes'    => 'Update',
    'subscribe_confirm_button_yes' => 'Send your status',
    'subscription'                 => 'Registrations',
    'subscribe'                    => 'Register',
    'not_answered'                 => 'Not answered !',
    'none'                         => 'None',
    'status'                       => 'Status',
    'answered_at'                  => 'Answered at',
    'unknown'                      => 'Unknown',
    'informations'                 => 'Informations',
    'attendees'                    => 'Attendees',
    'confirmed'                    => 'Confirmed',

    'month'  => 'month|months',
    'day'    => 'day|days',
    'hour'   => 'hour|hours',
    'minute' => 'minute|minutes',
    'second' => 'second|seconds',

    'placeholder_title'        => 'Name of the operation',
    'placeholder_staging'      => 'Meetup location (system, station, citadel...)',
    'placeholder_staging_sys'  => 'Meetup system',
    'placeholder_staging_info' => 'More informations about the staging',
    'placeholder_fc'           => 'Name of the fleet commander',
    'placeholder_description'  => 'Additional information about the operation. This field supports BBCode.',
    'placeholder_comment'      => 'Additional information',

    'created_at' => 'Created at',
    'updated_at' => 'Updated at',
    'created_by' => 'Created by',

    'title'           => 'Title',
    'type'            => 'Type',
    'tags'            => 'Tags',
    'description'     => 'Description',
    'comment'         => 'Comment',
    'starts_at'       => 'Starts at',
    'starts_in'       => 'Starts in',
    'started'         => 'Started',
    'started_at'      => 'Started at',
    'ends_at'         => 'Ends at',
    'ends_in'         => 'Ends in',
    'ended_at'        => 'Ended at',
    'duration'        => 'Duration',
    'lasted'          => 'Lasted',
    'importance'      => 'Importance',
    'staging'         => 'Staging',
    'staging_sys'     => 'Staging system',
    'staging_info'    => 'Staging info',
    'fleet_commander' => 'Fleet Commander',
    'character'       => 'Character',

    'notification_new_operation'      => '<!channel> :rocket: A new operation has been posted!',
    'notification_edit_operation'     => '<!here> :pencil2: An operation has been edited!',
    'notification_cancel_operation'   => '<!here> :no_entry_sign: An operation has been cancelled!',
    'notification_activate_operation' => '<!channel> :white_check_mark: A cancelled operation has been reactivated!',
    'notification_ping_operation'     => '<!channel> :bell: ',
    'notification_enable'             => 'Notify to Slack',
    'integration_channel'             => 'Integration Channel',

    'slack_integration' => 'Slack Integration',
    'enabled'           => 'Enabled',
    'webhook'           => 'Webhook',
    'emoji_full'        => 'Full Emoji',
    'emoji_half'        => 'Half Emoji',
    'emoji_empty'       => 'Empty Emoji',
    'help_emoji'        => 'Setup which emoji to use to display the "importance" of an operation when relaying to Slack.',
    'save'              => 'Save',

    'warning_no_character' => "You can't subscribe to an operation without any character registered in SeAT. Please add an API Key and retry.",

    'in' => 'In',
    'to' => 'To',

    'new'  => 'New',
    'edit' => 'Edit',

    'name'       => 'Name',
    'background' => 'Background',
    'text_color' => 'Text color',
    'preview'    => 'Preview',
    'order'      => 'Order',

    'name_tag_placeholder'           => 'Name of the tag... 7 characters max.',
    'background_placeholder'         => 'Background color... #000000',
    'text_color_placeholder'         => 'Text color... #FFFFFF',
    'order_placeholder'              => 'For sorting (numeric). Lower displayed first.',
    'select_role_filter_placeholder' => 'Select a Role to restrict on',

    'delete_tag_confirm_button_no'  => 'No, do not delete this tag',
    'delete_tag_confirm_button_yes' => 'Yes, I am sure I want to delete this tag',

    'direct_link' => 'Direct link',

    'paps' => 'Paps',

    'analytic'   => 'Analytic Axis',
    'quantifier' => 'Quantifier',
    'strategic'  => 'Strategic',
    'pvp'        => 'PvP',
    'mining'     => 'Mining',
    'untracked'  => 'Un-Tracked',
    'list'       => 'List',
];
