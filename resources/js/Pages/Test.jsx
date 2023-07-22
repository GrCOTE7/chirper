import { Head } from '@inertiajs/react';
import Layout from '@/Shared/Layout.jsx';

export default function Test() {
    return (
        <Layout>
            <Head title="Test" />
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Test</div>
                            <div className="card-body">
                                Welcome to our application!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Layout>
    );
}