# Templates

```php
$templatesController = $client->getTemplatesController();
```

## Class Name

`TemplatesController`

## Methods

* [Fav Templates](../../doc/controllers/templates.md#fav-templates)
* [All Templates](../../doc/controllers/templates.md#all-templates)
* [Template Detail](../../doc/controllers/templates.md#template-detail)
* [Process Template](../../doc/controllers/templates.md#process-template)
* [Generate Template](../../doc/controllers/templates.md#generate-template)
* [Template Groups](../../doc/controllers/templates.md#template-groups)


# Fav Templates

```php
function favTemplates(int $userId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 12;

$templatesController->favTemplates($userId);
```


# All Templates

```php
function allTemplates(int $userId): AllTemplates
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`AllTemplates`](../../doc/models/all-templates.md)

## Example Usage

```php
$userId = 1;

$result = $templatesController->allTemplates($userId);
```

## Example Response *(as JSON)*

```json
{
  "code": "200",
  "status": "success",
  "message": "templates fatched Successfully",
  "data": [
    {
      "id": 1,
      "name": "Article Generator",
      "icon": "<i class=\"fa-solid fa-file-lines main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Turn a title and outline text into a fully complete high quality article within seconds",
      "template_code": "KPAQQ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "article-generator",
      "package": "all",
      "fields": "[{\"name\":\"Article Title\",\"placeholder\":\"e.g. Amazing cuisine culture of Mexico\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. taco, sangria, paella\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 2,
      "name": "Content Rewriter",
      "icon": "<i class=\"fa-solid fa-square-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Take a piece of content and rewrite it to make it more interesting, creative, and engaging",
      "template_code": "WCZGL",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "content-rewriter",
      "package": "all",
      "fields": "[{\"name\":\"What would you like to rewrite?\", \"placeholder\":\"Enter your text to rewrite...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 3,
      "name": "Paragraph Generator",
      "icon": "<i class=\"fa-solid fa-line-columns main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate paragraphs about any topic including a keyword and in a specific tone of voice",
      "template_code": "JXRZB",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "paragraph-generator",
      "package": "all",
      "fields": "[{\"name\":\"Paragraph Description\", \"placeholder\":\"Provide details of what you want to write about...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. fruit, lime\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 4,
      "name": "Talking Points",
      "icon": "<i class=\"fa-solid fa-list-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write short, simple and informative points for the subheadings of your article",
      "template_code": "VFWSQ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "talking-points",
      "package": "all",
      "fields": "[{\"name\":\"Article Title\",\"placeholder\":\"e.g. 10 ways to create websites\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Subheading Description\",\"placeholder\":\"e.g. Why you should create a website\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 5,
      "name": "Pros & Cons",
      "icon": "<i class=\"fa-solid fa-code-compare main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write the pros and cons of a product, service or website for your blog article",
      "template_code": "OPYAB",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "pros-and-cons",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. iPhone, Samsung\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. Explain what kind of cell phone you can to compare\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 6,
      "name": "Blog Titles",
      "icon": "<i class=\"fa-solid fa-message-text blog-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Nobody wants to read boring blog titles, generate catchy blog titles with this tool",
      "template_code": "WGKYP",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-titles",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog post is about?\", \"placeholder\":\"Describe your blog post...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 7,
      "name": "Blog Section",
      "icon": "<i class=\"fa-solid fa-message-lines blog-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Write a full blog section (few paragraphs) about a subheading of your article",
      "template_code": "EEKZF",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-section",
      "package": "all",
      "fields": "[{\"name\":\"Title of your blog article\",\"placeholder\":\"e.g. 5 best places to visit in Spain\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Subheadings\",\"placeholder\":\"e.g. Barcelona, San Sebastian, Madrid\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 8,
      "name": "Blog Ideas",
      "icon": "<i class=\"fa-solid fa-message-dots blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "The perfect tool to start writing great articles. Generate creative ideas for your next post",
      "template_code": "KDGOX",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-ideas",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog post is about?\", \"placeholder\":\"e.g. 5 best places to visit in Spain\", \"required\":1, \"input\":\"textarea\",\"code\":\"title\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 9,
      "name": "Blog Intros",
      "icon": "<i class=\"fa-solid fa-message-exclamation blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write an intro that will entice your visitors to read more about your article",
      "template_code": "TZTYR",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-intros",
      "package": "all",
      "fields": "[{\"name\":\"Blog Post Title\",\"placeholder\":\"e.g. 5 best places to visit in Spain\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"What is your blog post is about?\",\"placeholder\":\"Describe your blog article\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 10,
      "name": "Blog Conclusion",
      "icon": "<i class=\"fa-solid fa-message-check blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "End your blog articles with an engaging conclusion paragraph",
      "template_code": "ZGUKM",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-conclusion",
      "package": "all",
      "fields": "[{\"name\":\"Blog Post Title\",\"placeholder\":\"e.g. 5 best places to visit in Spain\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"What is your blog post is about?\",\"placeholder\":\"Describe your blog article\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 11,
      "name": "Summarize Text",
      "icon": "<i class=\"fa-solid fa-file-contract main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Summarize any text in a short and easy to understand concise way",
      "template_code": "OMMEI",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "summarize-text",
      "package": "all",
      "fields": "[{\"name\":\"What would you like to summarize?\", \"placeholder\":\"Enter your text to summarize...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 12,
      "name": "Product Description",
      "icon": "<i class=\"fa-solid fa-list-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write the description about your product and why it worth it",
      "template_code": "HXLNA",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "product-description",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 13,
      "name": "Startup Name Generator",
      "icon": "<i class=\"fa-solid fa-lightbulb-on main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate cool, creative, and catchy names for your startup in seconds",
      "template_code": "DJSVM",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "startup-name-generator",
      "package": "all",
      "fields": "[{\"name\":\"Startup Description\", \"placeholder\":\"Explain what your statrup idea is about...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"Seed words\",\"placeholder\":\"e.g. flow, app, tech\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":200}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 14,
      "name": "Product Name Generator",
      "icon": "<i class=\"fa-solid fa-box-circle-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create creative product names from examples words",
      "template_code": "IXKBE",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "product-name-generator",
      "package": "all",
      "fields": "[{\"name\":\"Product Description\", \"placeholder\":\"Provide product details...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"Seed words\",\"placeholder\":\"e.g. fast, healthy, compact\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":200}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 15,
      "name": "Meta Description",
      "icon": "<i class=\"fa-solid fa-memo-circle-info web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write SEO-optimized meta description based on a description",
      "template_code": "JCDIK",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "meta-description",
      "package": "all",
      "fields": "[{\"name\":\"Website Name\", \"placeholder\":\"e.g. Amazon, Google\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Website Description\", \"placeholder\":\"Describe what your website or business...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"Keywords\", \"placeholder\":\"e.g. cloud services, databases\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 16,
      "name": "FAQs",
      "icon": "<i class=\"fa-solid fa-message-question web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate frequently asked questions based on your product description",
      "template_code": "SZAUF",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "faqs",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\", \"placeholder\":\"e.g. baby toys\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\", \"placeholder\":\"Describe what your product or service does...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 17,
      "name": "FAQ Answers",
      "icon": "<i class=\"fa-solid fa-messages-question web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate creative answers to questions (FAQs) about your business or website",
      "template_code": "BFENK",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "faq-answers",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\", \"placeholder\":\"e.g. baby toys\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"What is the question you are generating answers for?\", \"placeholder\":\"e.g. How to use this product?\", \"required\":1, \"input\":\"textarea\",\"code\":\"question\", \"length\":600}, {\"name\":\"Product Description\", \"placeholder\":\"Describe what your product or service does...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 18,
      "name": "Testimonials / Reviews",
      "icon": "<i class=\"fa-solid fa-star-sharp-half-stroke web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Add social proof to your website by generating user testimonials",
      "template_code": "XLGPP",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "testimonials",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\", \"placeholder\":\"e.g. baby toys\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\", \"placeholder\":\"Describe what your product or service does...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 19,
      "name": "Facebook Ads",
      "icon": "<i class=\"fa-brands fa-facebook social-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Write Facebook ads that engage your audience and deliver a high conversion rate",
      "template_code": "CTMNI",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "social",
      "slug": "facebook-ads",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 20,
      "name": "Video Descriptions",
      "icon": "<i class=\"fa-brands fa-youtube video-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write compelling YouTube descriptions to get people interested in your video",
      "template_code": "ZLKSP",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "video",
      "slug": "video-descriptions",
      "package": "all",
      "fields": "[{\"name\":\"What is the title of your video?\", \"placeholder\":\"e.g. start earning money online\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 21,
      "name": "Video Titles",
      "icon": "<i class=\"fa-brands fa-youtube video-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a compelling YouTube video title to catch everyones attention",
      "template_code": "OJIOV",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "video",
      "slug": "video-titles",
      "package": "all",
      "fields": "[{\"name\":\"What is your video about?\", \"placeholder\":\"Provide description of your video, provide as many details as possible...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 22,
      "name": "Youtube Tags Generator",
      "icon": "<i class=\"fa-brands fa-youtube video-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate SEO-optimized YouTube tags / keywords for your video",
      "template_code": "ECNVU",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "video",
      "slug": "youtube-tags-generator",
      "package": "all",
      "fields": "[{\"name\":\"Enter your video title with keywords\", \"placeholder\":\"e.g. start earning money online\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 23,
      "name": "Instagram Captions",
      "icon": "<i class=\"fa-brands fa-instagram social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Grab attention with catchy captions for your Instagram posts",
      "template_code": "EOASR",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "instagram-captions",
      "package": "all",
      "fields": "[{\"name\":\"What is your instagram post about?\", \"placeholder\":\"e.g. start earning money online\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 24,
      "name": "Instagram Hashtags Generator",
      "icon": "<i class=\"fa-brands fa-instagram social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Find the best hashtags to use for your Instagram posts",
      "template_code": "IEMBM",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "instagram-hashtags",
      "package": "all",
      "fields": "[{\"name\":\"Enter a Keyword\", \"placeholder\":\"e.g. makeup\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 25,
      "name": "Social Media Post (Personal)",
      "icon": "<i class=\"fa-solid fa-thumbs-up social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a social media post for yourself to be published on any platform",
      "template_code": "CKOHL",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "social-post-personal",
      "package": "all",
      "fields": "[{\"name\":\"What is this post about?\", \"placeholder\":\"e.g. I got fluent in Spanish in 1 week\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 26,
      "name": "Social Media Post (Business)",
      "icon": "<i class=\"fa-solid fa-thumbs-up social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a post for your business to be published on any social media platform",
      "template_code": "ABWGU",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "social-post-business",
      "package": "all",
      "fields": "[{\"name\":\"Company Name\", \"placeholder\":\"e.g. Amazon, Google\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Company Description\", \"placeholder\":\"e.g. Amazon is a leading vendor\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"What is this post about?\", \"placeholder\":\"e.g. I got fluent in Spanish in 1 week\", \"required\":1, \"input\":\"textarea\",\"code\":\"post\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 27,
      "name": "Facebook Headlines",
      "icon": "<i class=\"fa-brands fa-facebook social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write catchy and convincing headlines to make your Facebook Ads stand out",
      "template_code": "HJYJZ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "facebook-headlines",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 28,
      "name": "Google Ads Headlines",
      "icon": "<i class=\"fa-brands fa-google social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write catchy 30-character headlines to promote your product with Google Ads",
      "template_code": "SGZTW",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "google-headlines",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 29,
      "name": "Google Ads Description",
      "icon": "<i class=\"fa-brands fa-google social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a Google Ads description that makes your ad stand out and generates leads",
      "template_code": "YQAFG",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "google-ads",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 30,
      "name": "Problem-Agitate-Solution (PAS) Framework",
      "icon": "<i class=\"fa-solid fa-pen-nib framework-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate one of most effective copywriting formula for your business",
      "template_code": "BGXJE",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "framework",
      "slug": "problem-agitate-solution",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 31,
      "name": "Academic Essay",
      "icon": "<i class=\"fa-solid fa-scroll-old main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create creative academic essays for various subjects just in a second",
      "template_code": "SXQBT",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "academic-essay",
      "package": "all",
      "fields": "[{\"name\":\"Essay Title\",\"placeholder\":\"e.g. Amazing cuisine culture of Mexico\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. taco, sangria, paella\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 32,
      "name": "Welcome Email",
      "icon": "<i class='fa-solid fa-envelope-open-text email-icon'></i>",
      "image": "undefined",
      "popular": 0,
      "description": "Create welcome emails for your customers",
      "template_code": "RLXGB",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "email",
      "slug": "email-welcome",
      "package": "all",
      "fields": "[{\"name\":\"Your Company/Product Name\",\"placeholder\":\"e.g. Creative Minds\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Describe your Product or Company\",\"placeholder\":\"\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:21.000000Z"
    },
    {
      "id": 33,
      "name": "Cold Email",
      "icon": "<i class=\"fa-solid fa-mailbox email-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create professional cold emails with the help of AI",
      "template_code": "RDJEZ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "email",
      "slug": "email-cold",
      "package": "free",
      "fields": "[{\"name\":\"Your Company/Product Name\",\"placeholder\":\"e.g. Creative Minds\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Context to include in the email\",\"placeholder\":\"\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":600}, {\"name\":\"Describe your Product or Company\",\"placeholder\":\"\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 34,
      "name": "Follow-Up Email",
      "icon": "<i class=\"fa-solid fa-reply-all email-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create professional email follow up with just few clicks",
      "template_code": "XVNNQ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "email",
      "slug": "email-follow-up",
      "package": "all",
      "fields": "[{\"name\":\"Your Company/Product Name\",\"placeholder\":\"e.g. Creative Minds\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Following up after\",\"placeholder\":\"\", \"required\":0, \"input\":\"input\",\"code\":\"keywords\", \"length\":600}, {\"name\":\"Describe your Product or Company\",\"placeholder\":\"\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 35,
      "name": "Creative Stories",
      "icon": "<i class=\"fa-solid fa-books main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Allow AI to generate creative stories for you based on input text",
      "template_code": "PAKMF",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "creative-stories",
      "package": "all",
      "fields": "[{\"name\":\"What is your story is about?\", \"placeholder\":\"Provide as many details as possible for creating a story tale\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 36,
      "name": "Grammar Checker",
      "icon": "<i class=\"fa-solid fa-spell-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Make sure that there are no errors in your content",
      "template_code": "OORHD",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "grammar-checker",
      "package": "all",
      "fields": "[{\"name\":\"Include your text here to check\", \"placeholder\":\"\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 37,
      "name": "Summarize for 2nd Grader",
      "icon": "<i class=\"fa-solid fa-thought-bubble main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Summarize any complex content for a 2nd grader child",
      "template_code": "SGJLU",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "2nd-grader",
      "package": "all",
      "fields": "[{\"name\":\"Include your text to summarize\", \"placeholder\":\"\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 38,
      "name": "Video Scripts",
      "icon": "<i class=\"fa-solid fa-film video-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Quickly create scripts for your videos and start shooting",
      "template_code": "WISHV",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "video",
      "slug": "video-scripts",
      "package": "all",
      "fields": "[{\"name\":\"What is your video about?\", \"placeholder\":\"Provide description of what your video is about, provide all details\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":6000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 39,
      "name": "Amazon Product Description",
      "icon": "<i class=\"fa-brands fa-amazon ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create attention grabbing amazon product description",
      "template_code": "WISTT",
      "status": 0,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ecommerce",
      "slug": "amazon-product",
      "package": "professional",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. baby toys\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:39.000000Z"
    },
    {
      "id": 40,
      "name": "Text Extender",
      "icon": "<i class=\"fa-solid fa-text-width main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Extend your sentences with more description and additional information",
      "template_code": "LMMPR",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "text-extender",
      "package": "all",
      "fields": "[{\"name\":\"Enter your text\",\"placeholder\":\"Enter your text here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 41,
      "name": "Rewrite with Keywords",
      "icon": "<i class=\"fa-solid fa-arrows-rotate main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Rewrite your existing content with including specific keywords",
      "template_code": "NJLCK",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "rewrite-with-keywords",
      "package": "all",
      "fields": "[{\"name\":\"Enter your text\",\"placeholder\":\"Enter your text here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}, {\"name\":\"Included Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 42,
      "name": "Song Lyrics",
      "icon": "<i class=\"fa-solid fa-message-music other-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Generate a song lyrics based on your description and keywords",
      "template_code": "QJGQU",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "other",
      "slug": "song-lyric",
      "package": "all",
      "fields": "[{\"name\":\"Song description\",\"placeholder\":\"Provide your song description here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 43,
      "name": "Business Ideas",
      "icon": "<i class=\"fa-solid fa-user-tie-hair main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate business ideas based on your keywords and description",
      "template_code": "IQWZV",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "business-ideas",
      "package": "all",
      "fields": "[{\"name\":\"Industry description\",\"placeholder\":\"Describe your target industry...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 44,
      "name": "LinkedIn Posts",
      "icon": "<i class=\"fa-brands fa-linkedin-in social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create an interesting linkedin post with the help of AI",
      "template_code": "NEVUR",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "linkedin-post",
      "package": "all",
      "fields": "[{\"name\":\"Describe your post\",\"placeholder\":\"Enter your post details here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 46,
      "name": "Company Bio",
      "icon": "<i class=\"fa-solid fa-address-card web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a comprehensive company bio based on your inputs",
      "template_code": "MQSHO",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "company-bio",
      "package": "all",
      "fields": "[{\"name\":\"Company Name\",\"placeholder\":\"Enter your company name...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Company Description\",\"placeholder\":\"Provide company information...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 47,
      "name": "Email Subject Lines",
      "icon": "<i class=\"fa-solid fa-mailbox email-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create professional email suject lines",
      "template_code": "TFYLZ",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "email",
      "slug": "email-subjects",
      "package": "all",
      "fields": "[{\"name\":\"Describe your email\",\"placeholder\":\"Explain what is your email is about...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 48,
      "name": "Product Benefits",
      "icon": "<i class=\"fa-brands fa-product-hunt ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "List out product benefits via help of AI solution",
      "template_code": "CPTXT",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "ecommerce",
      "slug": "product-benefits",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Product Description\",\"placeholder\":\"Describe your product...\", \"required\":0, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 49,
      "name": "Selling Product Titles",
      "icon": "<i class=\"fa-solid fa-heading ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Find out selling product titles for your product description",
      "template_code": "KMKBQ",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ecommerce",
      "slug": "selling-titles",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Product Description\",\"placeholder\":\"Describe your product...\", \"required\":0, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 50,
      "name": "Product Comparisons",
      "icon": "<i class=\"fa-brands fa-product-hunt ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Create a comprehensize comparison of two products between each other",
      "template_code": "UNOEP",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ecommerce",
      "slug": "product-comparison",
      "package": "all",
      "fields": "[{\"name\":\"Products to Compare\",\"placeholder\":\"iPhone vs Samsung\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 51,
      "name": "Product Characteristics",
      "icon": "<i class=\"fa-brands fa-product-hunt ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a full prodcut characteristics",
      "template_code": "RKYNX",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ecommerce",
      "slug": "product-characteristics",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":400}, {\"name\":\"Focus Keywords\",\"placeholder\":\"e.g. soft, cotton, girl\", \"required\":0, \"input\":\"textarea\",\"code\":\"keywords\", \"length\":400}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 52,
      "name": "Twitter Tweets",
      "icon": "<i class=\"fa-brands fa-twitter social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate an intersting twitter tweets with AI",
      "template_code": "YVEFP",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "twitter-tweets",
      "package": "all",
      "fields": "[{\"name\":\"Tweet Description\",\"placeholder\":\"What do you want to tweet about...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 53,
      "name": "TitTok Video Scripts",
      "icon": "<i class=\"fa-solid fa-video-plus video-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Video scripts that are ready to shoot and will make you go viral",
      "template_code": "PEVVE",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "video",
      "slug": "tiktok-script",
      "package": "all",
      "fields": "[{\"name\":\"Video Description\",\"placeholder\":\"Describe your tiktok video...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 54,
      "name": "LinkedIn Ad Headlines",
      "icon": "<i class=\"fa-brands fa-linkedin-in social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Attention-grabbing, click-inducing and high-converting ad headlines for LinkedIn",
      "template_code": "WMRJR",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "linkedin-headlines",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 55,
      "name": "LinkedIn Ad Descriptions",
      "icon": "<i class=\"fa-brands fa-linkedin-in social-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Professional and eye-catching ad descriptions that will make your product shine",
      "template_code": "SSWNL",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "social",
      "slug": "linkedin-description",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 56,
      "name": "App and SMS Notifications",
      "icon": "<i class=\"fa-solid fa-message-sms other-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Notification messages for your apps, websites and mobile devices that grabs users attention",
      "template_code": "HRXVL",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "other",
      "slug": "sms-notification",
      "package": "all",
      "fields": "[{\"name\":\"Notification Description\",\"placeholder\":\"Enter your notification details...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 57,
      "name": "Tone Changer",
      "icon": "<i class=\"fa-solid fa-arrows-turn-to-dots main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Change the tone of your writing to match your audience",
      "template_code": "SYVKG",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "tone-changer",
      "package": "all",
      "fields": "[{\"name\":\"Target Text\",\"placeholder\":\"Enter your text here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":8000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 58,
      "name": "Amazon Product Features",
      "icon": "<i class=\"fa-brands fa-amazon ecommerce-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Advantages and features of your products that will make them irresistable for shoppers",
      "template_code": "ETEDT",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ecommerce",
      "slug": "amazon-product-feature",
      "package": "free",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 59,
      "name": "Dictionary",
      "icon": "<i class=\"fa-solid fa-spell-check main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Use a dictionary to find all details of your word",
      "template_code": "SNINY",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "dictionary",
      "package": "all",
      "fields": "[{\"name\":\"Word\",\"placeholder\":\"Enter your word here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 60,
      "name": "Privacy Policy",
      "icon": "<i class=\"fa-solid fa-shield-halved main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Develop a privacy policy information for your organization",
      "template_code": "GUXCM",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "privacy-policy",
      "package": "all",
      "fields": "[{\"name\":\"Platform Name\",\"placeholder\":\"e.g Website/Business Name\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Full Platform Description\",\"placeholder\":\"Enter your plaform description here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 61,
      "name": "Terms and Conditions",
      "icon": "<i class=\"fa-solid fa-shield-quartered main-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Develop a terms and conditions information for your organization",
      "template_code": "LWOKG",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "text",
      "slug": "terms-conditions",
      "package": "all",
      "fields": "[{\"name\":\"Platform Name\",\"placeholder\":\"e.g Website/Business Name\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Full Platform Description\",\"placeholder\":\"Enter your plaform description here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 62,
      "name": "Clickbait Titles",
      "icon": "<i class=\"fa-solid fa-fishing-rod ad-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Create a creative clickbait titles for your products",
      "template_code": "CHJGF",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "ad",
      "slug": "clickbait-title",
      "package": "free",
      "fields": "[{\"name\":\"Product Description\",\"placeholder\":\"Enter your product description here...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 63,
      "name": "Company Press Release",
      "icon": "<i class=\"fa-solid fa-rectangles-mixed marketing-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a company press release with the help of AI",
      "template_code": "JKTUY",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "marketing",
      "slug": "company-press-release",
      "package": "all",
      "fields": "[{\"name\":\"Company Name\",\"placeholder\":\"Enter your company name...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Company Description\",\"placeholder\":\"Provide company information..\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}, {\"name\":\"What is the press release is about?\",\"placeholder\":\"Describe press release information...\", \"required\":1, \"input\":\"textarea\",\"code\":\"audience\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 64,
      "name": "Brand/Product Press Release",
      "icon": "<i class=\"fa-solid fa-rectangles-mixed marketing-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Write a brand or prodcut press release with the help of AI",
      "template_code": "XTABO",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "marketing",
      "slug": "product-press-release",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"Describe your product..\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}, {\"name\":\"What is the press release is about?\",\"placeholder\":\"Describe press release information...\", \"required\":1, \"input\":\"textarea\",\"code\":\"audience\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 65,
      "name": "Attention-Interest-Desire-Action (AIDA) Framework",
      "icon": "<i class=\"fa-solid fa-pen-nib framework-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "AIDA model will help you ensure that any kind of writing, is as effective as possible",
      "template_code": "WQJYP",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "framework",
      "slug": "aida-frameword",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"Enter more details here\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 66,
      "name": "Before–After–Bridge (BAB) Framework",
      "icon": "<i class=\"fa-solid fa-pen-nib framework-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Conversion-oriented formula designed to make a particular offer more appealing",
      "template_code": "APUSA",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "framework",
      "slug": "bab-frameword",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"Enter more details here\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 67,
      "name": "Promise–Picture–Proof–Push (PPPP) Framework",
      "icon": "<i class=\"fa-solid fa-pen-nib framework-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Use 4P formula to craft persuasive content that moves readers to action",
      "template_code": "AEJJV",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "framework",
      "slug": "pppp-frameword",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"Enter your product name here...\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"Enter more details here\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 68,
      "name": "Brand Names",
      "icon": "<i class=\"fa-solid fa-copyright marketing-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate unique brand names with the help of AI",
      "template_code": "FYKJD",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "marketing",
      "slug": "brand-names",
      "package": "all",
      "fields": "[{\"name\":\"Product Description\",\"placeholder\":\"Describe your product...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":800}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 69,
      "name": "Ad Headlines",
      "icon": "<i class=\"fa-sharp fa-solid fa-rectangle-ad ad-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Write an attention grabbing ad headlines",
      "template_code": "DYNJE",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "ad",
      "slug": "ad-headlines",
      "package": "all",
      "fields": "[{\"name\":\"Product Name\",\"placeholder\":\"e.g. VR, Oculus\", \"required\":1, \"input\":\"input\",\"code\":\"title\", \"length\":200}, {\"name\":\"Audience\",\"placeholder\":\"e.g. Women, Aliens\", \"required\":0, \"input\":\"input\",\"code\":\"audience\", \"length\":200}, {\"name\":\"Product Description\",\"placeholder\":\"e.g. VR is an innovative device that can allow you to be part of virtual world\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 70,
      "name": "Newsletter Generator",
      "icon": "<i class=\"fa-solid fa-newspaper web-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Generate a newsletter based on the provided information",
      "template_code": "SXFVD",
      "status": 1,
      "professional": 0,
      "new": 0,
      "type": "original",
      "group": "web",
      "slug": "newsletter-generator",
      "package": "all",
      "fields": "[{\"name\":\"Newsletter Description\",\"placeholder\":\"Describe what it should be about...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":2000}]",
      "created_at": "2023-07-06T08:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 71,
      "name": "Blog Outline",
      "icon": "<i class=\"fa-solid fa-message-text blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Nobody wants to read boring blog outlines, generate catchy blog outlines with this tool",
      "template_code": "OUTLINE_TEMPLATE",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-outlines",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog title is about?\", \"placeholder\":\"Describe your blog title...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-08-22T22:49:23.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 72,
      "name": "Blog",
      "icon": "<i class=\"fa-solid fa-message-text blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Nobody wants to read boring blogs, generate catchy blogs with this tool",
      "template_code": "FINAL_BLOG_TEMPLATE",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog title is about?\", \"placeholder\":\"Describe your blog title...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-08-22T22:49:23.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 73,
      "name": "Blog Wizard Titles",
      "icon": "<i class=\"fa-solid fa-message-text blog-icon\"></i>",
      "image": null,
      "popular": 1,
      "description": "Nobody wants to read boring blog titles, generate catchy blog titles with this tool",
      "template_code": "BLOG_TITLE",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blogwizard-titles",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog post is about?\", \"placeholder\":\"Describe your blog post...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-07-06T13:33:48.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    },
    {
      "id": 74,
      "name": "Blog Keywords",
      "icon": "<i class=\"fa-solid fa-message-text blog-icon\"></i>",
      "image": null,
      "popular": 0,
      "description": "Nobody wants to read boring blog keywords, generate catchy blog keywords with this tool",
      "template_code": "KEYWORDS_TEMPLATE",
      "status": 1,
      "professional": 0,
      "new": 1,
      "type": "original",
      "group": "blog",
      "slug": "blog-keywords",
      "package": "all",
      "fields": "[{\"name\":\"What is your blog keywords is about?\", \"placeholder\":\"Describe your keywords title...\", \"required\":1, \"input\":\"textarea\",\"code\":\"description\", \"length\":600}]",
      "created_at": "2023-08-23T03:49:23.000000Z",
      "updated_at": "2023-09-20T05:57:13.000000Z"
    }
  ]
}
```


# Template Detail

```php
function templateDetail(int $userId, int $templateId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 40;

$templateId = 1;

$templatesController->templateDetail(
    $userId,
    $templateId
);
```


# Process Template

```php
function processTemplate(
    int $contentId,
    int $maxResults,
    int $maxWords,
    float $temperature,
    int $userId
): ProcessTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentId` | `int` | Query, Required | - |
| `maxResults` | `int` | Query, Required | - |
| `maxWords` | `int` | Query, Required | - |
| `temperature` | `float` | Query, Required | - |
| `userId` | `int` | Query, Required | - |

## Response Type

[`ProcessTemplate`](../../doc/models/process-template.md)

## Example Usage

```php
$contentId = 286;

$maxResults = 1;

$maxWords = 100;

$temperature = 0.5;

$userId = 1;

$result = $templatesController->processTemplate(
    $contentId,
    $maxResults,
    $maxWords,
    $temperature,
    $userId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "data": "Tsmokeshope: A Haven for Vapers and Smokers  Introduction:  If you're a passionate vaper or smoker, you've probably heard of Tsmokeshope. This online store has gained a reputation for being a one-stop-shop for all your smoking and vaping needs. From e-cigarettes and vape mods to premium cigars and tobacco pipes, Tsmokeshope offers an extensive range of products. But what sets them apart from the competition? Let's dive into the details and discover why Tsmokeshope is the go-to destination for smokers and vapers alike.  Tell Me About Code:  One of the most enticing aspects of Tsmokeshope is their commitment to providing customers with the best deals and discounts. Their website is often adorned with promotional banners offering exclusive coupon codes and limited-time offers. By utilizing these codes during checkout, you can enjoy significant savings on your purchases. Whether you're a seasoned smoker or a newbie vaper, Tsmokeshope ensures that you get the most bang for your buck.  Variety and Quality:  Tsmokeshope prides itself on offering an extensive range of products to cater to all smoking and vaping preferences. From popular e-juice brands to rare tobacco blends, they have it all. Their selection of vape mods and starter kits is equally impressive, ensuring that both beginners and advanced vapers find what they need. Moreover, Tsmokeshope only sources products from trusted manufacturers, guaranteeing top-notch quality and authenticity.  Customer Service:  When it comes to customer service, Tsmokeshope goes above and beyond to ensure customer satisfaction. Their team of knowledgeable and friendly staff is always ready to assist you with any queries or concerns. Whether you need help choosing the perfect e-liquid flavor or have questions regarding a specific product, Tsmokeshope's customer service is prompt and reliable. They prioritize building long-term relationships with their customers and strive to provide a seamless shopping experience.  Shipping and Returns:  Tsmokeshope understands the importance of swift and secure shipping. They offer various shipping options, both domestic and international, to cater to customers worldwide. Additionally, they have a hassle-free return policy, allowing you to return or exchange products within a specified time frame if you're not satisfied. This commitment to customer convenience sets Tsmokeshope apart from many other online smoke shops.  Conclusion:  In conclusion, Tsmokeshope is a haven for smokers and vapers alike. With their wide range of products, commitment to quality, exceptional customer service, and attractive deals, they have become a trusted name in the smoking and vaping community. Whether you're a beginner looking to explore the world of vaping or a seasoned smoker seeking premium cigars, Tsmokeshope has something for everyone. So, why settle for less when you can indulge in the best? Visit Tsmokeshope today and elevate your smoking or vaping experience to new heights."
}
```


# Generate Template

```php
function generateTemplate(
    int $userId,
    string $templateCode,
    string $language,
    int $workbookId,
    int $folderId,
    int $maxResults,
    int $words,
    string $title,
    string $description,
    float $creativity
): GenerateTemplate
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `templateCode` | `string` | Query, Required | - |
| `language` | `string` | Query, Required | - |
| `workbookId` | `int` | Query, Required | - |
| `folderId` | `int` | Query, Required | - |
| `maxResults` | `int` | Query, Required | - |
| `words` | `int` | Query, Required | - |
| `title` | `string` | Query, Required | - |
| `description` | `string` | Query, Required | - |
| `creativity` | `float` | Query, Required | - |

## Response Type

[`GenerateTemplate`](../../doc/models/generate-template.md)

## Example Usage

```php
$userId = 40;

$templateCode = 'EEKZF';

$language = 'en-US';

$workbookId = 1;

$folderId = 1;

$maxResults = 1;

$words = 100;

$title = 'Tsmokeshope';

$description = 'tell me about code';

$creativity = 0.5;

$result = $templatesController->generateTemplate(
    $userId,
    $templateCode,
    $language,
    $workbookId,
    $folderId,
    $maxResults,
    $words,
    $title,
    $description,
    $creativity
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "max_results": "1",
  "temperature": "0.5",
  "max_words": 100,
  "id": 286
}
```


# Template Groups

```php
function templateGroups(): void
```

## Response Type

`void`

## Example Usage

```php
$templatesController->templateGroups();
```
