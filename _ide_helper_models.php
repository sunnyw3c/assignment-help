<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int|null $user_id
 * @property int|null $tutor_id
 * @property string|null $order_number
 * @property string|null $service_type
 * @property int|null $service_id
 * @property string $subject
 * @property string $title
 * @property string $deadline
 * @property string|null $tutor_deadline
 * @property int $pages
 * @property string|null $file_path
 * @property string|null $description
 * @property numeric|null $budget
 * @property numeric|null $original_price
 * @property string|null $discount_code
 * @property string $payment_status
 * @property numeric $amount_paid
 * @property numeric $amount_due
 * @property string $status
 * @property int|null $assignment_service_id
 * @property string|null $academic_level
 * @property string|null $difficulty
 * @property string|null $assignment_type
 * @property string|null $citation_style
 * @property int|null $word_count
 * @property string|null $specific_requirements
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AssignmentFile> $assignmentFiles
 * @property-read int|null $assignment_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\File> $files
 * @property-read int|null $files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \App\Models\Service|null $service
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereAcademicLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereAmountDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereAssignmentServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereAssignmentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereCitationStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereDiscountCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment wherePages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereSpecificRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereTutorDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereTutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Assignment whereWordCount($value)
 */
	class Assignment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $assignment_id
 * @property string $original_name
 * @property string $file_path
 * @property string|null $file_type
 * @property int|null $file_size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Assignment $assignment
 * @property-read string $file_size_formatted
 * @property-read string $file_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssignmentFile whereUpdatedAt($value)
 */
	class AssignmentFile extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $fileable_type
 * @property int $fileable_id
 * @property string $original_name
 * @property string $file_path
 * @property string|null $file_type
 * @property int|null $file_size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $fileable
 * @property-read string $file_extension
 * @property-read string $file_icon
 * @property-read string $file_size_formatted
 * @property-read string $file_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereFileableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUpdatedAt($value)
 */
	class File extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $assignment_id
 * @property int $sender_id
 * @property string|null $receiver_role
 * @property string $body
 * @property string $type
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Assignment $assignment
 * @property-read \App\Models\User $sender
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereReceiverRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $icon
 * @property string|null $short_description
 * @property string|null $long_description
 * @property numeric $base_price_per_page
 * @property int $turnaround_min_hours
 * @property int $turnaround_max_hours
 * @property numeric $rating
 * @property int $orders_completed
 * @property array<array-key, mixed>|null $features
 * @property array<array-key, mixed>|null $academic_levels
 * @property array<array-key, mixed>|null $subjects
 * @property bool $is_active
 * @property int $display_order
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Assignment> $assignments
 * @property-read int|null $assignments_count
 * @property-read \App\Models\ServiceDetail|null $details
 * @property-read mixed $formatted_price
 * @property-read mixed $turnaround
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service ordered()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereAcademicLevels($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereBasePricePerPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereFeatures($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereOrdersCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereSubjects($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereTurnaroundMaxHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereTurnaroundMinHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $service_id
 * @property string|null $hero_title
 * @property string|null $hero_subtitle
 * @property string|null $hero_description
 * @property array<array-key, mixed>|null $what_we_offer
 * @property array<array-key, mixed>|null $pricing_tiers
 * @property array<array-key, mixed>|null $process_steps
 * @property array<array-key, mixed>|null $sample_topics
 * @property array<array-key, mixed>|null $testimonials
 * @property array<array-key, mixed>|null $faqs
 * @property array<array-key, mixed>|null $citation_styles
 * @property array<array-key, mixed>|null $deliverables
 * @property array<array-key, mixed>|null $guarantees
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereCitationStyles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereDeliverables($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereFaqs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereGuarantees($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereHeroDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereHeroSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereHeroTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail wherePricingTiers($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereProcessSteps($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereSampleTopics($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereTestimonials($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDetail whereWhatWeOffer($value)
 */
	class ServiceDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

