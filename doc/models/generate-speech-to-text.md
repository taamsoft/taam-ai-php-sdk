
# Generate Speech to Text

## Structure

`GenerateSpeechToText`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `text` | `string` | Required | - | getText(): string | setText(string text): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `old` | `string` | Required | - | getOld(): string | setOld(string old): void |
| `current` | `int` | Required | - | getCurrent(): int | setCurrent(int current): void |

## Example (as JSON)

```json
{
  "text": "Marhaban, ana al-mutahaddithi al-iftiradi min imza'i al-jawda. Da'ani ulqi al-tahiyyata ala jumhourik wa u'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut'a.",
  "status": "success",
  "url": "http://127.0.0.1:8000/transcribe/0p8DmYbj2WkiONOe1xsSf6nVIZERRJgE8RJELnvG.mp3",
  "id": 43,
  "old": "10000000",
  "current": 10000000
}
```

