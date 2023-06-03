import requests

def main():
    work_id = 1
    enable_works = 0
    disabled_works = 0

    try:
        while True:
            url = f'http://localhost/works/{work_id}/show'
            print(f'Solicitar url {url}')
            response = requests.get(url, cookies={
                "eyserges_session" : "eyJ..."
            })
            """ if response.status_code == 404:
                break """
            if response.status_code == 403:
                disabled_works += 1
            elif response.status_code == 200:
                enable_works += 1
            else:
                print(f'Código de estado recibido {response.status_code} para la url {url}')
            work_id += 1
    except KeyboardInterrupt:
        pass
    print(f'Encontrado: {enable_works} obras normales and {disabled_works} obras dadas de baja')

if __name__ == "__main__":
    main()