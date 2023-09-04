<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerExport\Notifications\Export;
use Joy\VoyagerImport\Notifications\Import;
use stdClass;
use TCG\Voyager\Facades\Voyager;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $notificationType = $this->faker->randomKey([
            Export::class => 'Export',
            Import::class => 'Import',
            // ResetPassword::class => 'ResetPassword',
            // VerifyEmail::class => 'VerifyEmail',
        ]);

        $notifiableType = $this->faker->randomKey([
            // '' => 'None',
            Voyager::modelClass('Account') => 'Account',
            // // Voyager::modelClass('AccountsAudit') => 'AccountsAudit',
            // Voyager::modelClass('Alert') => 'Alert',
            // Voyager::modelClass('AmProjecttemplate') => 'AmProjecttemplate',
            // // Voyager::modelClass('AmProjecttemplatesAudit') => 'AmProjecttemplatesAudit',
            // Voyager::modelClass('AmTasktemplate') => 'AmTasktemplate',
            // // Voyager::modelClass('AmTasktemplatesAudit') => 'AmTasktemplatesAudit',
            // Voyager::modelClass('AobhBusinesshour') => 'AobhBusinesshour',
            // Voyager::modelClass('AodIndex') => 'AodIndex',
            // // Voyager::modelClass('AodIndexAudit') => 'AodIndexAudit',
            // Voyager::modelClass('AodIndexevent') => 'AodIndexevent',
            // // Voyager::modelClass('AodIndexeventAudit') => 'AodIndexeventAudit',
            // Voyager::modelClass('AokKnowledgebase') => 'AokKnowledgebase',
            // // Voyager::modelClass('AokKnowledgebaseAudit') => 'AokKnowledgebaseAudit',
            // Voyager::modelClass('AokKnowledgebaseBaseCategory') => 'AokKnowledgebaseBaseCategory',
            // // Voyager::modelClass('AokKnowledgeBaseCategoriesAudit') => 'AokKnowledgeBaseCategoriesAudit',
            // Voyager::modelClass('AopCaseEvent') => 'AopCaseEvent',
            // // Voyager::modelClass('AopCaseEventsAudit') => 'AopCaseEventsAudit',
            // Voyager::modelClass('AopCaseUpdate') => 'AopCaseUpdate',
            // // Voyager::modelClass('AopCaseUpdatesAudit') => 'AopCaseUpdatesAudit',
            // Voyager::modelClass('AorChart') => 'AorChart',
            // Voyager::modelClass('AorCondition') => 'AorCondition',
            // Voyager::modelClass('AorField') => 'AorField',
            // Voyager::modelClass('AorReport') => 'AorReport',
            // // Voyager::modelClass('AorReportsAudit') => 'AorReportsAudit',
            // Voyager::modelClass('AorScheduledReport') => 'AorScheduledReport',
            // Voyager::modelClass('AosContract') => 'AosContract',
            // // Voyager::modelClass('AosContractsAudit') => 'AosContractsAudit',
            // Voyager::modelClass('AosContractsDocument') => 'AosContractsDocument',
            // Voyager::modelClass('AosInvoice') => 'AosInvoice',
            // // Voyager::modelClass('AosInvoicesAudit') => 'AosInvoicesAudit',
            // Voyager::modelClass('AosLineItemGroup') => 'AosLineItemGroup',
            // // Voyager::modelClass('AosLineItemGroupsAudit') => 'AosLineItemGroupsAudit',
            // Voyager::modelClass('AosPdfTemplate') => 'AosPdfTemplate',
            // // Voyager::modelClass('AosPdfTemplatesAudit') => 'AosPdfTemplatesAudit',
            // Voyager::modelClass('AosProduct') => 'AosProduct',
            // // Voyager::modelClass('AosProductCategoriesAudit') => 'AosProductCategoriesAudit',
            // Voyager::modelClass('AosProductCategory') => 'AosProductCategory',
            // // Voyager::modelClass('AosProductsAudit') => 'AosProductsAudit',
            // Voyager::modelClass('AosProductsQuote') => 'AosProductsQuote',
            // // Voyager::modelClass('AosProductsQuotesAudit') => 'AosProductsQuotesAudit',
            // Voyager::modelClass('AosQuote') => 'AosQuote',
            // // Voyager::modelClass('AosQuotesAudit') => 'AosQuotesAudit',
            // Voyager::modelClass('AowAction') => 'AowAction',
            // Voyager::modelClass('AowCondition') => 'AowCondition',
            // Voyager::modelClass('AowProcessed') => 'AowProcessed',
            // Voyager::modelClass('AowProcessedAowAction') => 'AowProcessedAowAction',
            // Voyager::modelClass('AowWorkflow') => 'AowWorkflow',
            // // Voyager::modelClass('AowWorkflowAudit') => 'AowWorkflowAudit',
            // Voyager::modelClass('Bug') => 'Bug',
            // // Voyager::modelClass('BugsAudit') => 'BugsAudit',
            // Voyager::modelClass('Call') => 'Call',
            // Voyager::modelClass('CallsContact') => 'CallsContact',
            // Voyager::modelClass('CallsLead') => 'CallsLead',
            // Voyager::modelClass('CallsReschedule') => 'CallsReschedule',
            // // Voyager::modelClass('CallsRescheduleAudit') => 'CallsRescheduleAudit',
            // Voyager::modelClass('CallsUser') => 'CallsUser',
            // Voyager::modelClass('Campaign') => 'Campaign',
            // Voyager::modelClass('CampaignLog') => 'CampaignLog',
            // // Voyager::modelClass('CampaignsAudit') => 'CampaignsAudit',
            // Voyager::modelClass('CampaignTrkr') => 'CampaignTrkr',
            // // Voyager::modelClass('CasesAudit') => 'CasesAudit',
            Voyager::modelClass('Contact') => 'Contact',
            // // Voyager::modelClass('ContactsAudit') => 'ContactsAudit',
            // Voyager::modelClass('ContactsBug') => 'ContactsBug',
            // Voyager::modelClass('ContactsCase') => 'ContactsCase',
            // Voyager::modelClass('CrmCase') => 'CrmCase',
            // Voyager::modelClass('Currency') => 'Currency',
            // Voyager::modelClass('Document') => 'Document',
            // Voyager::modelClass('DocumentRevision') => 'DocumentRevision',
            // Voyager::modelClass('Eapm') => 'Eapm',
            // Voyager::modelClass('Email') => 'Email',
            // Voyager::modelClass('EmailAddress') => 'EmailAddress',
            // // Voyager::modelClass('EmailAddressesAudit') => 'EmailAddressesAudit',
            // Voyager::modelClass('EmailCache') => 'EmailCache',
            // Voyager::modelClass('Emailman') => 'Emailman',
            // Voyager::modelClass('EmailMarketing') => 'EmailMarketing',
            // Voyager::modelClass('EmailsBean') => 'EmailsBean',
            // Voyager::modelClass('EmailTemplate') => 'EmailTemplate',
            // Voyager::modelClass('Favorite') => 'Favorite',
            // Voyager::modelClass('Folder') => 'Folder',
            // Voyager::modelClass('FpEvent') => 'FpEvent',
            // Voyager::modelClass('FpEventLocation') => 'FpEventLocation',
            // // Voyager::modelClass('FpEventLocationsAudit') => 'FpEventLocationsAudit',
            // // Voyager::modelClass('FpEventsAudit') => 'FpEventsAudit',
            // Voyager::modelClass('ImportMap') => 'ImportMap',
            // Voyager::modelClass('InboundEmail') => 'InboundEmail',
            // Voyager::modelClass('JjwgAddressCache') => 'JjwgAddressCache',
            // // Voyager::modelClass('JjwgAddressCacheAudit') => 'JjwgAddressCacheAudit',
            // Voyager::modelClass('JjwgArea') => 'JjwgArea',
            // // Voyager::modelClass('JjwgAreasAudit') => 'JjwgAreasAudit',
            // Voyager::modelClass('JjwgMap') => 'JjwgMap',
            // Voyager::modelClass('JjwgMarker') => 'JjwgMarker',
            // // Voyager::modelClass('JjwgMarkersAudit') => 'JjwgMarkersAudit',
            // Voyager::modelClass('JobQueue') => 'JobQueue',
            Voyager::modelClass('Lead') => 'Lead',
            // // Voyager::modelClass('LeadsAudit') => 'LeadsAudit',
            // Voyager::modelClass('LinkedDocument') => 'LinkedDocument',
            // Voyager::modelClass('Meeting') => 'Meeting',
            // Voyager::modelClass('MeetingsContact') => 'MeetingsContact',
            // Voyager::modelClass('MeetingsLead') => 'MeetingsLead',
            // Voyager::modelClass('MeetingsUser') => 'MeetingsUser',
            // Voyager::modelClass('Note') => 'Note',
            // Voyager::modelClass('Notification') => 'Notification',
            // // Voyager::modelClass('OpportunitiesAudit') => 'OpportunitiesAudit',
            // Voyager::modelClass('OpportunitiesContact') => 'OpportunitiesContact',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            // Voyager::modelClass('OutboundEmail') => 'OutboundEmail',
            // // Voyager::modelClass('OutboundEmailAudit') => 'OutboundEmailAudit',
            // Voyager::modelClass('Project') => 'Project',
            // Voyager::modelClass('ProjectTask') => 'ProjectTask',
            // // Voyager::modelClass('ProjectTaskAudit') => 'ProjectTaskAudit',
            // Voyager::modelClass('Prospect') => 'Prospect',
            // Voyager::modelClass('ProspectList') => 'ProspectList',
            // Voyager::modelClass('ProspectListsProspect') => 'ProspectListsProspect',
            // Voyager::modelClass('Release') => 'Release',
            // Voyager::modelClass('Reminder') => 'Reminder',
            // Voyager::modelClass('RemindersInvitee') => 'RemindersInvitee',
            // Voyager::modelClass('SavedSearch') => 'SavedSearch',
            // Voyager::modelClass('Sample') => 'Sample',
            // Voyager::modelClass('Scheduler') => 'Scheduler',
            // Voyager::modelClass('Securitygroup') => 'Securitygroup',
            // // Voyager::modelClass('SecuritygroupsAudit') => 'SecuritygroupsAudit',
            // Voyager::modelClass('SecuritygroupsRecord') => 'SecuritygroupsRecord',
            // Voyager::modelClass('SecuritygroupsUser') => 'SecuritygroupsUser',
            // Voyager::modelClass('Spot') => 'Spot',
            // Voyager::modelClass('Sugarfeed') => 'Sugarfeed',
            // Voyager::modelClass('Survey') => 'Survey',
            // Voyager::modelClass('Surveyquestion') => 'Surveyquestion',
            // Voyager::modelClass('Surveyquestionoption') => 'Surveyquestionoption',
            // // Voyager::modelClass('SurveyquestionoptionsAudit') => 'SurveyquestionoptionsAudit',
            // Voyager::modelClass('Surveyquestionresponse') => 'Surveyquestionresponse',
            // // Voyager::modelClass('SurveyquestionresponsesAudit') => 'SurveyquestionresponsesAudit',
            // // Voyager::modelClass('SurveyquestionsAudit') => 'SurveyquestionsAudit',
            // Voyager::modelClass('Surveyresponse') => 'Surveyresponse',
            // // Voyager::modelClass('SurveyresponsesAudit') => 'SurveyresponsesAudit',
            // // Voyager::modelClass('SurveysAudit') => 'SurveysAudit',
            // Voyager::modelClass('Task') => 'Task',
            // Voyager::modelClass('Templatesectionline') => 'Templatesectionline',
            // Voyager::modelClass('Tracker') => 'Tracker',
            Voyager::modelClass('User') => 'User',
            // Voyager::modelClass('UserPreference') => 'UserPreference',
            // Voyager::modelClass('UsersLastImport') => 'UsersLastImport',
            // Voyager::modelClass('UsersSignature') => 'UsersSignature',
        ]);

        return [
            'type'               => $notificationType,
            'notifiable_type'    => $notifiableType,
            'notifiable_id'      => (new $notifiableType)->factory(),
            'data'               => new \stdClass(),
            'parent_id'          => null,
            'status'             => $this->faker->randomKey([
                'ACTIVE' => 'ACTIVE',
                'INACTIVE' => 'INACTIVE',
                'EXPIRED' => 'EXPIRED',
            ]),
            'read_at' => $this->faker->dateTimeBetween('-1month', 'now'),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }

    /**
     * Indicate that the model's read status should be unread.
     *
     * @return static
     */
    public function unread()
    {
        return $this->state(fn (array $attributes) => [
            'read_at' => null,
        ]);
    }
}
