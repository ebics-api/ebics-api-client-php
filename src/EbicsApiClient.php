<?php

namespace EbicsApi\Client;

use RuntimeException;

/**
 * EBICS API Client class.
 */
class EbicsApiClient
{
    public function __construct(private string $apiKey, private string $apiHost)
    {
    }

    /**
     * Create Connection.
     * @param array $data
     * @return array
     */
    public function connectionCreate(array $data): array
    {
        return $this->makeRequest('/api/ebics/connections/create', 'POST', $data)->body;
    }

    /**
     * Update connection.
     * @param int $id
     * @param array $data
     * @return array
     */
    public function connectionUpdate(int $id, array $data): array
    {
        return $this->makeRequest("/api/ebics/connections/$id/update", 'POST', $data)->body;
    }

    /**
     * Get connection.
     * @param int $id
     * @return array
     */
    public function connectionGet(int $id): array
    {
        return $this->makeRequest("/api/ebics/connections/$id", 'GET')->body;
    }

    /**
     * List of connections.
     * @return \stdClass
     */
    public function connectionList(): \stdClass
    {
        return $this->makeRequest('/api/ebics/connections', 'GET');
    }

    /**
     * Delete connection.
     * @param int $id
     * @return array
     */
    public function connectionDelete(int $id): array
    {
        return $this->makeRequest("/api/ebics/connections/$id", 'DELETE')->body;
    }

    /**
     * Generate keyring.
     * @param array $data
     * @return array
     */
    public function keyringGenerate(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/generate', 'POST', $data)->body;
    }

    /**
     * Initialize keyring activation.
     * @param array $data
     * @return array
     */
    public function keyringInit(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/init', 'POST', $data)->body;
    }

    /**
     * Confirm keyring activation.
     * @param array $data
     * @return array
     */
    public function keyringConfirm(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/confirm', 'POST', $data)->body;
    }

    /**
     * Suspend keyring activation.
     * @param array $data
     * @return array
     */
    public function keyringSuspend(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/suspend', 'POST', $data)->body;
    }

    /**
     * Renew keyring.
     * @param array $data
     * @return array
     */
    public function keyringRenew(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/renew', 'POST', $data)->body;
    }

    /**
     * Get letter for keyring.
     * @param array $data
     * @return array
     */
    public function keyringLetter(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/letter', 'POST', $data)->body;
    }

    /**
     * Change secret for keyring.
     * @param array $data
     * @return array
     */
    public function keyringChangeSecret(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/change-secret', 'POST', $data)->body;
    }

    /**
     * Get keyring order types.
     * @param array $data
     * @return array
     */
    public function keyringOrderTypes(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/order-types', 'POST', $data)->body;
    }

    /**
     * HEV Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHev(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hev', 'POST', $data)->body;
    }

    /**
     * INI Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeIni(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ini', 'POST', $data)->body;
    }

    /**
     * HIA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHia(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hia', 'POST', $data)->body;
    }

    /**
     * HPB Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHpb(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hpb', 'POST', $data)->body;
    }

    /**
     * SPR Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeSpr(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/spr', 'POST', $data)->body;
    }

    /**
     * HCS Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHcs(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hcs', 'POST', $data)->body;
    }

    /**
     * HPD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHpd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hpd', 'POST', $data)->body;
    }

    /**
     * HKD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHkd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hkd', 'POST', $data)->body;
    }

    /**
     * HTD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHtd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/htd', 'POST', $data)->body;
    }

    /**
     * HAA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHaa(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/haa', 'POST', $data)->body;
    }

    /**
     * HAC Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHac(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hac', 'POST', $data)->body;
    }

    /**
     * FDL Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeFdl(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/fdl', 'POST', $data)->body;
    }

    /**
     * FUL Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeFul(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ful', 'POST', $data)->body;
    }

    /**
     * PTK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypePtk(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ptk', 'POST', $data)->body;
    }

    /**
     * VMK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeVmk(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/vmk', 'POST', $data)->body;
    }

    /**
     * STA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeSta(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/sta', 'POST', $data)->body;
    }

    /**
     * c52 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec52(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c52', 'POST', $data)->body;
    }

    /**
     * c53 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec53(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c53', 'POST', $data)->body;
    }

    /**
     * c54 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec54(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c54', 'POST', $data)->body;
    }

    /**
     * Z52 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ52(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z52', 'POST', $data)->body;
    }

    /**
     * Z53 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ53(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z53', 'POST', $data)->body;
    }

    /**
     * Z54 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ54(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z54', 'POST', $data)->body;
    }

    /**
     * ZSR Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZsr(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/zsr', 'POST', $data)->body;
    }

    /**
     * XEK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXek(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xek', 'POST', $data)->body;
    }

    /**
     * CCT Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCct(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cct', 'POST', $data)->body;
    }

    /**
     * CIP Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCip(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cip', 'POST', $data)->body;
    }

    /**
     * XE2 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXe2(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xe2', 'POST', $data)->body;
    }

    /**
     * XE3 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXe3(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xe3', 'POST', $data)->body;
    }

    /**
     * YCT Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeYct(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/yct', 'POST', $data)->body;
    }

    /**
     * CDB Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCdb(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cdb', 'POST', $data)->body;
    }

    /**
     * CDD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCdd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cdd', 'POST', $data)->body;
    }

    /**
     * BTD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeBtd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/btd', 'POST', $data)->body;
    }

    /**
     * BTU Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeBtu(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/btu', 'POST', $data)->body;
    }

    /**
     * List access logs.
     * @param array $query
     * @return \stdClass
     */
    public function accessLogList(array $query): \stdClass
    {
        return $this->makeRequest($this->endpointWithQuery('/api/ebics/logs', $query), 'GET');
    }

    /**
     * List scheduler files.
     * @param array $query
     * @return \stdClass
     */
    public function schedulerFileList(array $query): \stdClass
    {
        return $this->makeRequest($this->endpointWithQuery('/api/ebics/scheduler-files', $query), 'GET');
    }

    /**
     * Download scheduler files.
     * @param int $id
     * @return array
     */
    public function schedulerFileDownload(int $id): array
    {
        return $this->makeRequest("/api/ebics/scheduler-files/$id/download", 'GET')->body;
    }

    /**
     * Internal method for making requests.
     * @param string $endpoint
     * @param string $method
     * @param array|null $body
     * @return \StdClass object{headers: array, body: array}
     */
    private function makeRequest(string $endpoint, string $method, ?array $body = null): \StdClass
    {
        $url = $this->apiHost . $endpoint;

        $ch = curl_init($url);

        $headers = [
            'Accept: application/json',
            'Authorization: Key ' . $this->apiKey,
        ];

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, true);

        if ($body) {
            if (!empty($body['file_data']) && is_resource($body['file_data'])) {
                $data = $body;
                $filename = stream_get_meta_data($body['file_data'])['uri'] ?? 'file';
                $data['file_data'] = curl_file_create($filename, 'application/octet-stream', 'file_data');
            } else {
                $data = !empty($body['file_data']) ? $body : http_build_query($body);
            }

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $responseHeadersStr = substr($response, 0, $headerSize);
        $responseBody = substr($response, $headerSize);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new RuntimeException('cURL Error: ' . $error);
        }

        curl_close($ch);
        $parsedHeaders = [];
        foreach (explode("\r\n", $responseHeadersStr) as $line) {
            if (str_contains($line, ':')) {
                [$key, $value] = explode(':', $line, 2);
                $parsedHeaders[strtolower(trim($key))] = trim($value);
            }
        }

        if ($httpCode < 200 || $httpCode >= 300) {
            throw new RuntimeException("Error: $httpCode - $response");
        }

        return (object)[
            'headers' => $parsedHeaders,
            'body' => match (true) {
                str_contains($contentType, 'application/json') => json_decode($responseBody, true),
                str_contains($contentType, 'application/gzip') => ['gzip' => $responseBody],
                str_contains($contentType, 'application/xml') => ['xml' => $responseBody],
                str_contains($contentType, 'text/plain') => ['txt' => $responseBody],
                str_contains($contentType, 'application/pdf') => ['pdf' => $responseBody],
                empty($contentType) && $httpCode === 204 => [],
                default => throw new RuntimeException("Unexpected content type: $contentType"),
            }
        ];
    }

    /**
     * Builds a full URL with optional query parameters.
     * @param string $endpoint
     * @param array $query
     * @return string
     */
    private function endpointWithQuery(string $endpoint, array $query = []): string
    {
        if (empty($query)) {
            return $endpoint;
        }

        return $endpoint . '?' . http_build_query($query);
    }
}
