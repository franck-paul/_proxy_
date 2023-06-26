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

// Deprecated since 2.26

class Clearbricks extends Dotclear\Helper\Clearbricks
{
}

// Form helpers
class formButton extends Dotclear\Helper\Html\Form\Button
{
}
class formCheckbox extends Dotclear\Helper\Html\Form\Checkbox
{
}
class formColor extends Dotclear\Helper\Html\Form\Color
{
}
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
class formDate extends Dotclear\Helper\Html\Form\Date
{
}
class formDatetime extends Dotclear\Helper\Html\Form\Datetime
{
}
class formDiv extends Dotclear\Helper\Html\Form\Div
{
}
class formEmail extends Dotclear\Helper\Html\Form\Email
{
}
class formFieldset extends Dotclear\Helper\Html\Form\Fieldset
{
}
class formFile extends Dotclear\Helper\Html\Form\File
{
}
class formForm extends Dotclear\Helper\Html\Form\Form
{
}
class formHidden extends Dotclear\Helper\Html\Form\Hidden
{
}
class formInput extends Dotclear\Helper\Html\Form\Input
{
}
class formLabel extends Dotclear\Helper\Html\Form\Label
{
}
class formLegend extends Dotclear\Helper\Html\Form\Legend
{
}
class formLink extends Dotclear\Helper\Html\Form\Link
{
}
class formNote extends Dotclear\Helper\Html\Form\Note
{
}
class formNumber extends Dotclear\Helper\Html\Form\Number
{
}
class formOptgroup extends Dotclear\Helper\Html\Form\Optgroup
{
}
class formOption extends Dotclear\Helper\Html\Form\Option
{
}
class formPara extends Dotclear\Helper\Html\Form\Para
{
}
class formPassword extends Dotclear\Helper\Html\Form\Password
{
}
class formRadio extends Dotclear\Helper\Html\Form\Radio
{
}
class formSelect extends Dotclear\Helper\Html\Form\Select
{
}
class formSubmit extends Dotclear\Helper\Html\Form\Submit
{
}
class formText extends Dotclear\Helper\Html\Form\Text
{
}
class formTextarea extends Dotclear\Helper\Html\Form\Textarea
{
}
class formTime extends Dotclear\Helper\Html\Form\Time
{
}
class formUrl extends Dotclear\Helper\Html\Form\Url
{
}

// Diff helpers
class diff extends Dotclear\Helper\Diff\Diff
{
}
class tidyDiff extends Dotclear\Helper\Diff\TidyDiff
{
}
class tidyDiffChunk extends Dotclear\Helper\Diff\TidyDiffChunk
{
}
class tidyDiffLine extends Dotclear\Helper\Diff\TidyDiffLine
{
}

// Crypt helpers
class crypt extends Dotclear\Helper\Crypt
{
}

// Mail helpers
class mail extends Dotclear\Helper\Network\Mail\Mail
{
}
class socketMail extends Dotclear\Helper\Network\Mail\MailSocket
{
}

// Pager helpers
class pager extends Dotclear\Helper\Html\Pager
{
}

// XmlTag helpers
class xmlTag extends Dotclear\Helper\Html\XmlTag
{
}

// Rest helpers
class restServer extends Dotclear\Helper\RestServer
{
}

// Text helpers
class text extends Dotclear\Helper\Text
{
}

// Files and Path, … helpers
class files extends Dotclear\Helper\File\Files
{
}
class path extends Dotclear\Helper\File\Path
{
}
class filemanager extends Dotclear\Helper\File\Manager
{
}
class fileItem extends Dotclear\Helper\File\File
{
}

// Html helpers
class html extends Dotclear\Helper\Html\Html
{
}
class htmlFilter extends Dotclear\Helper\Html\HtmlFilter
{
}

// Mail helpers
class http extends Dotclear\Helper\Network\Http
{
}

// Wiki helpers
class wiki2xhtml extends Dotclear\Helper\Html\WikiToHtml
{
}

// Simple Template Systeme
class template extends Dotclear\Helper\Html\Template\Template
{
}
class tplNode extends Dotclear\Helper\Html\Template\TplNode
{
}
class tplNodeBlock extends Dotclear\Helper\Html\Template\TplNodeBlock
{
}
class tplNodeText extends Dotclear\Helper\Html\Template\TplNodeText
{
}
class tplNodeValue extends Dotclear\Helper\Html\Template\TplNodeValue
{
}
class tplNodeBlockDefinition extends Dotclear\Helper\Html\Template\TplNodeBlockDefinition
{
}
class tplNodeValueParent extends Dotclear\Helper\Html\Template\TplNodeValueParent
{
}

// HTML Validation
class htmlValidator extends Dotclear\Helper\Html\HtmlValidator
{
}

// Socket
class netSocket extends Dotclear\Helper\Network\Socket\Socket
{
}

// L10n
class l10n extends Dotclear\Helper\L10n
{
}

// Image helpers
class imageMeta extends Dotclear\Helper\File\Image\ImageMeta
{
}
class imageTools extends Dotclear\Helper\File\Image\ImageTools
{
}

// URL Handler
class urlHandler extends Dotclear\Helper\Network\UrlHandler
{
}

// net HTTP Client
class netHttp extends Dotclear\Helper\Network\HttpClient
{
}

// XML-RPC helper
class xmlrpcException extends Dotclear\Helper\Network\XmlRpc\XmlRpcException
{
}
class xmlrpcValue extends Dotclear\Helper\Network\XmlRpc\Value
{
}
class xmlrpcMessage extends Dotclear\Helper\Network\XmlRpc\Message
{
}
class xmlrpcRequest extends Dotclear\Helper\Network\XmlRpc\Request
{
}
class xmlrpcDate extends Dotclear\Helper\Network\XmlRpc\Date
{
}
class xmlrpcBase64 extends Dotclear\Helper\Network\XmlRpc\Base64
{
}
class xmlrpcClient extends Dotclear\Helper\Network\XmlRpc\Client
{
}
class xmlrpcClientMulticall extends Dotclear\Helper\Network\XmlRpc\ClientMulticall
{
}
class xmlrpcBasicServer extends Dotclear\Helper\Network\XmlRpc\BasicServer
{
}
class xmlrpcIntrospectionServer extends Dotclear\Helper\Network\XmlRpc\IntrospectionServer
{
}

// Feed Helpers
class feedParser extends Dotclear\Helper\Network\Feed\Parser
{
}
class feedReader extends Dotclear\Helper\Network\Feed\Reader
{
}

// Date helpers
class dt extends Dotclear\Helper\Date
{
}

// Zip helpers
class fileZip extends Dotclear\Helper\File\Zip\Zip
{
}
class fileUnzip extends Dotclear\Helper\File\Zip\Unzip
{
}

// Database -------------------

class dcSqlStatement extends Dotclear\Database\Statement\SqlStatement
{
}
class dcSelectStatement extends Dotclear\Database\Statement\SelectStatement
{
}
class dcJoinStatement extends Dotclear\Database\Statement\JoinStatement
{
}
class dcUpdateStatement extends Dotclear\Database\Statement\UpdateStatement
{
}
class dcInsertStatement extends Dotclear\Database\Statement\InsertStatement
{
}
class dcDeleteStatement extends Dotclear\Database\Statement\DeleteStatement
{
}
class dcTruncateStatement extends Dotclear\Database\Statement\TruncateStatement
{
}

class sessionDB extends Dotclear\Database\Session
{
}

class cursor extends Dotclear\Database\Cursor
{
}
class record extends Dotclear\Database\Record
{
}
class staticRecord extends Dotclear\Database\StaticRecord
{
}
class extStaticRecord extends Dotclear\Database\StaticRecord
{
}

class i_dbLayer extends Dotclear\Database\InterfaceHandler
{
}
class dbLayer extends Dotclear\Database\AbstractHandler
{
    public function db_connect(string $host, string $user, string $password, string $database)
    {
    }
    public function db_pconnect(string $host, string $user, string $password, string $database)
    {
    }
    public function db_close($handle)
    {
    }
    public function db_version($handle): string
    {
        return '';
    }
    public function db_query($handle, string $query)
    {
    }
    public function db_exec($handle, string $query)
    {
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
    public function db_fetch_assoc($res)
    {
    }
    public function db_result_seek($res, int $row): bool
    {
        return true;
    }
    public function db_changes($handle, $res): int
    {
        return 1;
    }
    public function db_last_error($handle)
    {
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

class i_dbSchema extends Dotclear\Database\InterfaceSchema
{
}
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

class dbStruct extends Dotclear\Database\Structure
{
}
class dbStructTable extends Dotclear\Database\Table
{
}

// Core -----------------------

class dcRecord extends Dotclear\Database\MetaRecord
{
}
class dcNsProcess extends Dotclear\Core\Process
{
    public static function init(): bool
    {
        return true;
    }
}

// Core admin -----------------

class adminBlogFilter extends Dotclear\Core\Backend\Filter\FilterBlogs
{
}
class adminBlogList extends Dotclear\Core\Backend\Listing\ListingBlogs
{
}
class adminCommentFilter extends Dotclear\Core\Backend\Filter\FilterComments
{
}
class adminCommentList extends Dotclear\Core\Backend\Listing\ListingComments
{
}
class adminGenericFilterV2 extends Dotclear\Core\Backend\Filter\Filters
{
}
class adminGenericListV2 extends Dotclear\Core\Backend\Listing\Listing
{
}
class adminMediaFilter extends Dotclear\Core\Backend\Filter\FilterMedia
{
}
class adminMediaList extends Dotclear\Core\Backend\Listing\ListingMedia
{
}
class adminMediaPage extends Dotclear\Core\Backend\MediaPage
{
}
class adminModulesList extends Dotclear\Core\Backend\ModulesList
{
}
class adminPostFilter extends Dotclear\Core\Backend\Filter\FilterPosts
{
}
class adminPostList extends Dotclear\Core\Backend\Listing\ListingPosts
{
}
class adminPostMiniList extends Dotclear\Core\Backend\Listing\ListingPostsMini
{
}
class adminUserFilter extends Dotclear\Core\Backend\Filter\FilterUsers
{
}
class adminUserList extends Dotclear\Core\Backend\Listing\ListingUsers
{
}
class adminThemesList extends Dotclear\Core\Backend\ThemesList
{
}
class adminUserPref extends Dotclear\Core\Backend\UserPref
{
}
class dcActions extends Dotclear\Core\Backend\Action\Actions
{
    public function beginPage(string $breadcrumb = '', string $head = '')
    {
    }
    public function endPage()
    {
    }
    protected function fetchEntries(ArrayObject $from)
    {
    }
}
class dcAdmin extends Dotclear\Core\Backend\Utility
{
}
class dcAdminBlogPref extends Dotclear\Core\Backend\BlogPref
{
}
class dcAdminCombos extends Dotclear\Core\Backend\Combos
{
}
class dcAdminFilter extends Dotclear\Core\Backend\Filter\Filter
{
}
class dcAdminFilters extends Dotclear\Core\Backend\Filter\FiltersLibrary
{
}
class dcAdminHelper extends Dotclear\Core\Backend\Helper
{
}
class dcAdminNotices extends Dotclear\Core\Backend\Notices
{
}
class dcAdminURL extends Dotclear\Core\Backend\Url
{
}
class dcBlogsActions extends Dotclear\Core\Backend\Action\ActionsBlogs
{
}
class dcCommentsActions extends Dotclear\Core\Backend\Action\ActionsComments
{
}
class dcPostsActions extends Dotclear\Core\Backend\Action\ActionsPosts
{
}
class dcFavorites extends Dotclear\Core\Backend\Favorites
{
}
class dcMenu extends Dotclear\Core\Backend\Menu
{
}
class dcPage extends Dotclear\Core\Backend\Page
{
}
class dcPager extends Dotclear\Core\Backend\Listing\Pager
{
}
class dcThemeConfig extends Dotclear\Core\Backend\ThemeConfig
{
}

// Core public ----------------

class dcPublic extends Dotclear\Core\Frontend\Utility
{
}

// Deprecated since 2.25

class dcPagesActions extends Dotclear\Plugin\pages\BackendActions
{
}
class defaultWidgets extends Dotclear\Plugin\widgets\Widgets
{
}
class dcWidgets extends Dotclear\Plugin\widgets\WidgetsStack
{
}
class dcWidget extends Dotclear\Plugin\widgets\WidgetsElement
{
}
