<?php

/**
 * @brief _proxy_, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
// Classes aliases

// Deprecated since 2.28

/** @deprecated since 2.28 use Dotclear\Module\Themes */
class dcThemes extends Dotclear\Module\Themes
{
}

/** @deprecated since 2.28 use Dotclear\Core\PostMedia */
class dcPostMedia extends Dotclear\Core\PostMedia
{
}

/** @deprecated since 2.28 use Dotclear\Core\Media */
class dcMedia extends Dotclear\Core\Media
{
    public const MEDIA_TABLE_NAME = 'media';
}

/** @deprecated since 2.28 use Dotclear\Core\Meta */
class dcMeta extends Dotclear\Core\Meta
{
}

/** @deprecated since 2.28 use Dotclear\Core\Log */
class dcLog extends Dotclear\Core\Log
{
}

/** @deprecated since 2.28 use Dotclear\Core\Error */
class dcError extends Dotclear\Core\Error
{
}

/** @deprecated since 2.28 use Dotclear\Core\Notice */
class dcNotices extends Dotclear\Core\Notice
{
}

/** @deprecated since 2.28 use Dotclear\Core\Frontend\Ctx */
class context extends Dotclear\Core\Frontend\Ctx
{
}

/** @deprecated since 2.28 use Dotclear\Core\Auth */
class dcAuth extends Dotclear\Core\Auth
{
}

/** @deprecated since 2.28 use Dotclear\Core\Blog */
class dcBlog extends Dotclear\Core\Blog
{
}

/** @deprecated since 2.28 use Dotclear\Module\ModuleDefine */
class dcModuleDefine extends Dotclear\Module\ModuleDefine
{
}

/** @deprecated since 2.28 use Dotclear\Module\ModuleDefine */
class dcModules extends Dotclear\Module\Modules
{
}

/** @deprecated since 2.28 use Dotclear\Schema\Extension\Post */
class rsExtPost extends Dotclear\Schema\Extension\Post
{
}

/** @deprecated since 2.28 use Dotclear\Core\BlogWorkspace */
class dcNamespace extends Dotclear\Core\BlogWorkspace
{
}

/** @deprecated since 2.28 use Dotclear\Core\BlogSettings */
class dcSettings extends Dotclear\Core\BlogSettings
{
}

/** @deprecated since 2.28 use Dotclear\Core\UserWorkspace */
class dcWorkspace extends Dotclear\Core\UserWorkspace
{
}

/** @deprecated since 2.28 use Dotclear\Core\UserPreferences */
class dcPrefs extends Dotclear\Core\UserPreferences
{
}

/** @deprecated since 2.28 use Dotclear\Core\Trackback */
class dcTrackback extends Dotclear\Core\Trackback
{
}

/** @deprecated since 2.28 use Dotclear\Core\Categories */
class dcCategories extends Dotclear\Core\Categories
{
}

/** @deprecated since 2.28 use Dotclear\Core\Rest */
class dcRestServer extends Dotclear\Core\Rest
{
}

// Deprecated since 2.27

/** @deprecated since 2.27 use Dotclear\Core\Upgrade\Upgrade */
class dcUpgrade extends Dotclear\Core\Upgrade\Upgrade
{
}

/** @deprecated since 2.27 use Dotclear\Core\Backend\BlogPref */
class adminBlogPref extends Dotclear\Core\Backend\BlogPref
{
}

// Deprecated since 2.26

/** @deprecated since 2.26 use Dotclear\Helper\Clearbricks */
class Clearbricks extends Dotclear\Helper\Clearbricks
{
}

// Form helpers
/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Button */
class formButton extends Dotclear\Helper\Html\Form\Button
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Checkbox */
class formCheckbox extends Dotclear\Helper\Html\Form\Checkbox
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Color */
class formColor extends Dotclear\Helper\Html\Form\Color
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Component */
class formComponent extends Dotclear\Helper\Html\Form\Component
{
    protected function render(): string
    {
        return '';
    }

    protected function getDefaultElement(): string
    {
        return '';
    }
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Date */
class formDate extends Dotclear\Helper\Html\Form\Date
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Datetime */
class formDatetime extends Dotclear\Helper\Html\Form\Datetime
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Div */
class formDiv extends Dotclear\Helper\Html\Form\Div
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Email */
class formEmail extends Dotclear\Helper\Html\Form\Email
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Fieldset */
class formFieldset extends Dotclear\Helper\Html\Form\Fieldset
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\File */
class formFile extends Dotclear\Helper\Html\Form\File
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Form */
class formForm extends Dotclear\Helper\Html\Form\Form
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Hidden */
class formHidden extends Dotclear\Helper\Html\Form\Hidden
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Input */
class formInput extends Dotclear\Helper\Html\Form\Input
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Label */
class formLabel extends Dotclear\Helper\Html\Form\Label
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Legend */
class formLegend extends Dotclear\Helper\Html\Form\Legend
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Link */
class formLink extends Dotclear\Helper\Html\Form\Link
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Note */
class formNote extends Dotclear\Helper\Html\Form\Note
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Number */
class formNumber extends Dotclear\Helper\Html\Form\Number
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Optgroup */
class formOptgroup extends Dotclear\Helper\Html\Form\Optgroup
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Option */
class formOption extends Dotclear\Helper\Html\Form\Option
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Para */
class formPara extends Dotclear\Helper\Html\Form\Para
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Password */
class formPassword extends Dotclear\Helper\Html\Form\Password
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Radio */
class formRadio extends Dotclear\Helper\Html\Form\Radio
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Select */
class formSelect extends Dotclear\Helper\Html\Form\Select
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Submit */
class formSubmit extends Dotclear\Helper\Html\Form\Submit
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Text */
class formText extends Dotclear\Helper\Html\Form\Text
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Textarea */
class formTextarea extends Dotclear\Helper\Html\Form\Textarea
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Time */
class formTime extends Dotclear\Helper\Html\Form\Time
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Form\Url */
class formUrl extends Dotclear\Helper\Html\Form\Url
{
}

// Diff helpers
/** @deprecated since 2.26 use Dotclear\Helper\Diff\Diff */
class diff extends Dotclear\Helper\Diff\Diff
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Diff\TidyDiff */
class tidyDiff extends Dotclear\Helper\Diff\TidyDiff
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Diff\TidyDiffChunk */
class tidyDiffChunk extends Dotclear\Helper\Diff\TidyDiffChunk
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Diff\TidyDiffLine */
class tidyDiffLine extends Dotclear\Helper\Diff\TidyDiffLine
{
}

// Crypt helpers
/** @deprecated since 2.26 use Dotclear\Helper\Crypt */
class crypt extends Dotclear\Helper\Crypt
{
}

// Mail helpers
/** @deprecated since 2.26 use Dotclear\Helper\Network\Mail\Mail */
class mail extends Dotclear\Helper\Network\Mail\Mail
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\Mail\MailSocket */
class socketMail extends Dotclear\Helper\Network\Mail\MailSocket
{
}

// Pager helpers
/** @deprecated since 2.26 use Dotclear\Helper\Html\Pager */
class pager extends Dotclear\Helper\Html\Pager
{
}

// XmlTag helpers
/** @deprecated since 2.26 use Dotclear\Helper\Html\XmlTag */
class xmlTag extends Dotclear\Helper\Html\XmlTag
{
}

// Rest helpers
/** @deprecated since 2.26 use Dotclear\Helper\RestServer */
class restServer extends Dotclear\Helper\RestServer
{
}

// Text helpers
/** @deprecated since 2.26 use Dotclear\Helper\Text */
class text extends Dotclear\Helper\Text
{
}

// Files and Path, … helpers
/** @deprecated since 2.26 use Dotclear\Helper\File\Files */
class files extends Dotclear\Helper\File\Files
{
}

/** @deprecated since 2.26 use Dotclear\Helper\File\Path */
class path extends Dotclear\Helper\File\Path
{
}

/** @deprecated since 2.26 use Dotclear\Helper\File\Manager */
class filemanager extends Dotclear\Helper\File\Manager
{
}

/** @deprecated since 2.26 use Dotclear\Helper\File\File */
class fileItem extends Dotclear\Helper\File\File
{
}

// Html helpers
/** @deprecated since 2.26 use Dotclear\Helper\Html\Html */
class html extends Dotclear\Helper\Html\Html
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\HtmlFilter */
class htmlFilter extends Dotclear\Helper\Html\HtmlFilter
{
}

// Mail helpers
/** @deprecated since 2.26 use Dotclear\Helper\Network\Http */
class http extends Dotclear\Helper\Network\Http
{
}

// Wiki helpers
/** @deprecated since 2.26 use Dotclear\Helper\Html\WikiToHtml */
class wiki2xhtml extends Dotclear\Helper\Html\WikiToHtml
{
}

// Simple Template Systeme
/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\Template */
class template extends Dotclear\Helper\Html\Template\Template
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNode */
class tplNode extends Dotclear\Helper\Html\Template\TplNode
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNodeBlock */
class tplNodeBlock extends Dotclear\Helper\Html\Template\TplNodeBlock
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNodeText */
class tplNodeText extends Dotclear\Helper\Html\Template\TplNodeText
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNodeValue */
class tplNodeValue extends Dotclear\Helper\Html\Template\TplNodeValue
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNodeBlockDefinition */
class tplNodeBlockDefinition extends Dotclear\Helper\Html\Template\TplNodeBlockDefinition
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Html\Template\TplNodeValueParent */
class tplNodeValueParent extends Dotclear\Helper\Html\Template\TplNodeValueParent
{
}

// HTML Validation
/** @deprecated since 2.26 use Dotclear\Helper\Html\HtmlValidator */
class htmlValidator extends Dotclear\Helper\Html\HtmlValidator
{
}

// Socket
/** @deprecated since 2.26 use Dotclear\Helper\Network\Socket\Socket */
class netSocket extends Dotclear\Helper\Network\Socket\Socket
{
}

// L10n
/** @deprecated since 2.26 use Dotclear\Helper\L10n */
class l10n extends Dotclear\Helper\L10n
{
}

// Image helpers
/** @deprecated since 2.26 use Dotclear\Helper\File\Image\ImageMeta */
class imageMeta extends Dotclear\Helper\File\Image\ImageMeta
{
}

/** @deprecated since 2.26 use Dotclear\Helper\File\Image\ImageTools */
class imageTools extends Dotclear\Helper\File\Image\ImageTools
{
}

// URL Handler
/** @deprecated since 2.26 use Dotclear\Helper\Network\UrlHandler */
class urlHandler extends Dotclear\Helper\Network\UrlHandler
{
}

// net HTTP Client
/** @deprecated since 2.26 use Dotclear\Helper\Network\HttpClient */
class netHttp extends Dotclear\Helper\Network\HttpClient
{
}

// XML-RPC helper
/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\XmlRpcException */
class xmlrpcException extends Dotclear\Helper\Network\XmlRpc\XmlRpcException
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Value */
class xmlrpcValue extends Dotclear\Helper\Network\XmlRpc\Value
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Message */
class xmlrpcMessage extends Dotclear\Helper\Network\XmlRpc\Message
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Request */
class xmlrpcRequest extends Dotclear\Helper\Network\XmlRpc\Request
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Date */
class xmlrpcDate extends Dotclear\Helper\Network\XmlRpc\Date
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Base64 */
class xmlrpcBase64 extends Dotclear\Helper\Network\XmlRpc\Base64
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\Client */
class xmlrpcClient extends Dotclear\Helper\Network\XmlRpc\Client
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\ClientMulticall */
class xmlrpcClientMulticall extends Dotclear\Helper\Network\XmlRpc\ClientMulticall
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\BasicServer */
class xmlrpcBasicServer extends Dotclear\Helper\Network\XmlRpc\BasicServer
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\XmlRpc\IntrospectionServer */
class xmlrpcIntrospectionServer extends Dotclear\Helper\Network\XmlRpc\IntrospectionServer
{
}

// Feed Helpers
/** @deprecated since 2.26 use Dotclear\Helper\Network\Feed\Parser */
class feedParser extends Dotclear\Helper\Network\Feed\Parser
{
}

/** @deprecated since 2.26 use Dotclear\Helper\Network\Feed\Reader */
class feedReader extends Dotclear\Helper\Network\Feed\Reader
{
}

// Date helpers
/** @deprecated since 2.26 use Dotclear\Helper\Date */
class dt extends Dotclear\Helper\Date
{
}

// Zip helpers
/** @deprecated since 2.26 use Dotclear\Helper\File\Zip\Zip */
class fileZip extends Dotclear\Helper\File\Zip\Zip
{
}

/** @deprecated since 2.26 use Dotclear\Helper\File\Zip\Unzip */
class fileUnzip extends Dotclear\Helper\File\Zip\Unzip
{
}

// Database -------------------

/** @deprecated since 2.26 use Dotclear\Database\Statement\SqlStatement */
class dcSqlStatement extends Dotclear\Database\Statement\SqlStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\SelectStatement */
class dcSelectStatement extends Dotclear\Database\Statement\SelectStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\JoinStatement */
class dcJoinStatement extends Dotclear\Database\Statement\JoinStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\UpdateStatement */
class dcUpdateStatement extends Dotclear\Database\Statement\UpdateStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\InsertStatement */
class dcInsertStatement extends Dotclear\Database\Statement\InsertStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\DeleteStatement */
class dcDeleteStatement extends Dotclear\Database\Statement\DeleteStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Statement\TruncateStatement */
class dcTruncateStatement extends Dotclear\Database\Statement\TruncateStatement
{
}

/** @deprecated since 2.26 use Dotclear\Database\Session */
class sessionDB extends Dotclear\Database\Session
{
}

/** @deprecated since 2.26 use Dotclear\Database\Cursor */
class cursor extends Dotclear\Database\Cursor
{
}

/** @deprecated since 2.26 use Dotclear\Database\Record */
class record extends Dotclear\Database\Record
{
}

/** @deprecated since 2.26 use Dotclear\Database\StaticRecord */
class staticRecord extends Dotclear\Database\StaticRecord
{
}

/** @deprecated since 2.26 use Dotclear\Database\StaticRecord */
class extStaticRecord extends Dotclear\Database\StaticRecord
{
}

/** @deprecated since 2.26 use Dotclear\Database\InterfaceHandler */
interface i_dbLayer extends Dotclear\Interface\Database\ConnectionInterface
{
}

/** @deprecated since 2.26 use Dotclear\Database\AbstractHandler */
class dbLayer extends Dotclear\Database\AbstractHandler
{
    public function db_connect(string $host, string $user, string $password, string $database)
    {
        return null;
    }

    public function db_pconnect(string $host, string $user, string $password, string $database)
    {
        return null;
    }

    public function db_close($handle): void
    {
    }

    public function db_version($handle): string
    {
        return '';
    }

    public function db_search_path($handle, $path): string
    {
        return '';
    }

    public function db_query($handle, string $query)
    {
        return null;
    }

    public function db_exec($handle, string $query)
    {
        return null;
    }

    public function db_num_fields($res): int
    {
        return 1;
    }

    public function db_num_rows($res): int
    {
        return 1;
    }

    public function db_field_name($res, int $position): string
    {
        return '';
    }

    public function db_field_type($res, int $position): string
    {
        return '';
    }

    /**
     * @return     array<mixed>
     */
    public function db_fetch_assoc($res): array
    {
        return [];
    }

    public function db_result_seek($res, int $row): bool
    {
        return true;
    }

    public function db_changes($handle, $res): int
    {
        return 1;
    }

    public function db_last_error($handle): string
    {
        return '';
    }

    public function db_escape_string($str, $handle = null): string
    {
        return '';
    }

    public function db_write_lock(string $table): void
    {
    }

    public function db_unlock(): void
    {
    }
}

/** @deprecated since 2.26 use Dotclear\Database\InterfaceSchema */
interface i_dbSchema extends Dotclear\Interface\Database\SchemaInterface
{
}

/** @deprecated since 2.26 use Dotclear\Database\AbstractSchema */
class dbSchema extends Dotclear\Database\AbstractSchema
{
    /**
     * This method should return an array of all tables in database for the current connection.
     *
     * @return     array<string>
     */
    public function db_get_tables(): array
    {
        return [];
    }

    public function db_get_columns(string $table): array
    {
        return [];
    }

    public function db_get_keys(string $table): array
    {
        return [];
    }

    public function db_get_indexes(string $table): array
    {
        return [];
    }

    public function db_get_references(string $table): array
    {
        return [];
    }

    public function db_create_table(string $name, array $fields): void
    {
    }

    public function db_create_field(string $table, string $name, string $type, ?int $len, bool $null, $default): void
    {
    }

    public function db_create_primary(string $table, string $name, array $fields): void
    {
    }

    public function db_create_unique(string $table, string $name, array $fields): void
    {
    }

    public function db_create_index(string $table, string $name, string $type, array $fields): void
    {
    }

    public function db_create_reference(string $name, string $table, array $fields, string $foreign_table, array $foreign_fields, $update, $delete): void
    {
    }

    public function db_alter_field(string $table, string $name, string $type, ?int $len, bool $null, $default): void
    {
    }

    public function db_alter_primary(string $table, string $name, string $newname, array $fields): void
    {
    }

    public function db_alter_unique(string $table, string $name, string $newname, array $fields): void
    {
    }

    public function db_alter_index(string $table, string $name, string $newname, string $type, array $fields): void
    {
    }

    public function db_alter_reference(string $name, string $newname, string $table, array $fields, string $foreign_table, array $foreign_fields, $update, $delete): void
    {
    }

    public function db_drop_unique(string $table, string $name): void
    {
    }
}

/** @deprecated since 2.26 use Dotclear\Database\Structure */
class dbStruct extends Dotclear\Database\Structure
{
}

/** @deprecated since 2.26 use Dotclear\Database\Table */
class dbStructTable extends Dotclear\Database\Table
{
}

// Core -----------------------

/** @deprecated since 2.26 use Dotclear\Database\MetaRecord */
class dcRecord extends Dotclear\Database\MetaRecord
{
}

/** @deprecated since 2.26 use Dotclear\Core\Process */
class dcNsProcess extends Dotclear\Core\Process
{
    public static function init(): bool
    {
        return true;
    }
}

// Core admin -----------------

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FilterBlogs */
class adminBlogFilter extends Dotclear\Core\Backend\Filter\FilterBlogs
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingBlogs */
class adminBlogList extends Dotclear\Core\Backend\Listing\ListingBlogs
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FilterComments */
class adminCommentFilter extends Dotclear\Core\Backend\Filter\FilterComments
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingComments */
class adminCommentList extends Dotclear\Core\Backend\Listing\ListingComments
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\Filters */
class adminGenericFilterV2 extends Dotclear\Core\Backend\Filter\Filters
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\Listing */
class adminGenericListV2 extends Dotclear\Core\Backend\Listing\Listing
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FilterMedia */
class adminMediaFilter extends Dotclear\Core\Backend\Filter\FilterMedia
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingMedia */
class adminMediaList extends Dotclear\Core\Backend\Listing\ListingMedia
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\MediaPage */
class adminMediaPage extends Dotclear\Core\Backend\MediaPage
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\ModulesList */
class adminModulesList extends Dotclear\Core\Backend\ModulesList
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FilterPosts */
class adminPostFilter extends Dotclear\Core\Backend\Filter\FilterPosts
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingPosts */
class adminPostList extends Dotclear\Core\Backend\Listing\ListingPosts
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingPostsMini */
class adminPostMiniList extends Dotclear\Core\Backend\Listing\ListingPostsMini
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FilterUsers */
class adminUserFilter extends Dotclear\Core\Backend\Filter\FilterUsers
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\ListingUsers */
class adminUserList extends Dotclear\Core\Backend\Listing\ListingUsers
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\ThemesList */
class adminThemesList extends Dotclear\Core\Backend\ThemesList
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\UserPref */
class adminUserPref extends Dotclear\Core\Backend\UserPref
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Action\Actions */
class dcActions extends Dotclear\Core\Backend\Action\Actions
{
    public function beginPage(string $breadcrumb = '', string $head = ''): void
    {
    }

    public function endPage(): void
    {
    }

    protected function fetchEntries(ArrayObject $from): void
    {
    }
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Utility */
class dcAdmin extends Dotclear\Core\Backend\Utility
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\BlogPref */
class dcAdminBlogPref extends Dotclear\Core\Backend\BlogPref
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Combos */
class dcAdminCombos extends Dotclear\Core\Backend\Combos
{
}

/** @deprecated since 2.33 use Dotclear\Helper\Stack\Filter */
class dcAdminFilter extends Dotclear\Helper\Stack\Filter
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Filter\FiltersLibrary */
class dcAdminFilters extends Dotclear\Core\Backend\Filter\FiltersLibrary
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Helper */
class dcAdminHelper extends Dotclear\Core\Backend\Helper
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Notices */
class dcAdminNotices extends Dotclear\Core\Backend\Notices
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Url */
class dcAdminURL extends Dotclear\Core\Backend\Url
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Action\ActionsBlogs */
class dcBlogsActions extends Dotclear\Core\Backend\Action\ActionsBlogs
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Action\ActionsComments */
class dcCommentsActions extends Dotclear\Core\Backend\Action\ActionsComments
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Action\ActionsPosts */
class dcPostsActions extends Dotclear\Core\Backend\Action\ActionsPosts
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Favorites */
class dcFavorites extends Dotclear\Core\Backend\Favorites
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Menu */
class dcMenu extends Dotclear\Core\Backend\Menu
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Page */
class dcPage extends Dotclear\Core\Backend\Page
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\Listing\Pager */
class dcPager extends Dotclear\Core\Backend\Listing\Pager
{
}

/** @deprecated since 2.26 use Dotclear\Core\Backend\ThemeConfig */
class dcThemeConfig extends Dotclear\Core\Backend\ThemeConfig
{
}

// Core public ----------------

/** @deprecated since 2.26 use Dotclear\Core\Frontend\Utility */
class dcPublic extends Dotclear\Core\Frontend\Utility
{
}

/** @deprecated since 2.28 use Dotclear\Core\Frontend\Url */
class dcUrlHandlers extends Dotclear\Core\Frontend\Url
{
}

/** @deprecated since 2.28 use Dotclear\Core\Frontend\Tpl */
class dcTemplate extends Dotclear\Core\Frontend\Tpl
{
}

// Deprecated since 2.25

/** @deprecated since 2.25 use Dotclear\Plugin\pages\BackendActions */
class dcPagesActions extends Dotclear\Plugin\pages\BackendActions
{
}

/** @deprecated since 2.25 use Dotclear\Plugin\widgets\Widgets */
class defaultWidgets extends Dotclear\Plugin\widgets\Widgets
{
}

/** @deprecated since 2.25 use Dotclear\Plugin\widgets\WidgetsStack */
class dcWidgets extends Dotclear\Plugin\widgets\WidgetsStack
{
}

/** @deprecated since 2.25 use Dotclear\Plugin\widgets\WidgetsElement */
class dcWidget extends Dotclear\Plugin\widgets\WidgetsElement
{
}
